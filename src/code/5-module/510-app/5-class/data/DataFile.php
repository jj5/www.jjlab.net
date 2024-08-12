<?php

class DataFile {

  public $path;

  private $data;

  private $handle;

  public function __construct( $path ) {

    $this->path = $path;

    /*
    if ( file_exists( $this->path ) ) {

      $json = file_get_contents( $this->path );

      $this->data = json_decode( $json, true );

    }
    */
  }

  public function get_data() { return $this->data; }

  public function lock() {

    if ( $this->handle !== null ) {

      mud_fail( 'DataFile::lock() - handle already set' );

    }

    for ( $try_fopen = 1; $try_fopen <= 10; $try_fopen++ ) {

      $handle = fopen( $this->path, 'c+' );

      if ( $handle === false ) {
        
        usleep( rand( 10, 1000 ) );

        continue;

      }

      for ( $try_flock = 1; $try_flock < 10; $try_flock++ ) {

        if ( flock( $handle, LOCK_EX ) ) {

          $this->handle = $handle;

          $json = fread( $handle, filesize( $this->path ) );

          $this->data = json_decode( $json, true );

          return true;

        }

        usleep( rand( 10, 1000 ) );

      }
    }

    mud_fail( 'failed to lock file.', [ 'path' => $this->path ] );

  }

  public function save( $data ) {

    error_log( mud_json_pretty( debug_backtrace() ) );

    if ( count( array_keys( $data ) ) !== 2 ) {

      //mud_fail( 'DataFile::save() - invalid data' );

    }

    if ( ! $this->handle ) {

      mud_fail( 'DataFile::save() - no handle to save' );

    }

    if ( ! $data ) {

      mud_fail( 'DataFile::save() - no data to save' );

    }

    $json = mud_json_pretty( $data );

    echo "$json\n";

    if ( ! is_string( $json ) || json_last_error() ) {
      
      mud_fail( 'failed to encode data to JSON.', [ 'data' => $this->data ] );
      
    }

    $this->data = $data;

    $handle = $this->handle;

    $success = false;

    for ( $try = 1; $try <= 10; $try++ ) {

      if ( ftruncate( $handle, 0 ) !== false ) { $success = true; break; }

      usleep( rand( 10, 1000 ) );

    }

    if ( ! $success ) {

      mud_fail( 'failed to truncate file.', [ 'path' => $this->path ] );

    }

    $success = false;

    for ( $try = 1; $try <= 10; $try++ ) {

      if ( fseek( $handle, 0 ) !== false ) { $success = true; break; }

      usleep( rand( 10, 1000 ) );

    }

    if ( ! $success ) {

      mud_fail( 'failed to seek file.', [ 'path' => $this->path ] );

    }

    $success = false;

    for ( $try = 1; $try <= 10; $try++ ) {

      if ( fwrite( $handle, $json ) !== false ) { $success = true; break; }

      usleep( rand( 10, 1000 ) );

    }

    if ( ! $success ) {

      mud_fail( 'failed to write to file.', [ 'path' => $this->path ] );

    }

    $success = false;

    for ( $try = 1; $try <= 10; $try++ ) {

      if ( fflush( $handle ) !== false ) { $success = true; break; }

      usleep( rand( 10, 1000 ) );

    }

    if ( ! $success ) {

      mud_fail( 'failed to flush file.', [ 'path' => $this->path ] );

    }
  }

  public function unlock() {

    $handle = $this->handle;

    $success = false;

    for ( $try = 1; $try <= 10; $try++ ) {

      if ( flock( $handle, LOCK_UN ) !== false ) { $success = true; break; }

      usleep( rand( 10, 1000 ) );

    }

    if ( ! $success ) {

      mud_fail( 'failed to release lock.', [ 'path' => $this->path ] );

    }

    $success = false;

    for ( $try = 1; $try <= 10; $try++ ) {

      if ( fclose( $handle ) !== false ) { $success = true; break; }

      usleep( rand( 10, 1000 ) );

    }

    if ( ! $success ) {

      mud_fail( 'failed to close file.', [ 'path' => $this->path ] );

    }

    $this->handle = null;

    return true;

  }
}
