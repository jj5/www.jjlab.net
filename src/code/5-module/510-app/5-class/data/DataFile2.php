<?php

class DataFile2 {

  public $path;

  public function __construct( $path ) {

    $this->path = $path;

  }

  public function get_key( string $group, mixed $value, mixed $default = null ) : string {

    if ( false ) {

      $group_json = mud_json_pretty( $group );
      $value_json = mud_json_pretty( $value );
      $default_json = mud_json_pretty( $default );

      error_log( "get_key( $group_json, $value_json, $default_json )\n" );

    }

    $result = $default;
    $path = $this->path;

    $handle = $this->try_part(
      function() use ( $path ){
        return fopen( $path, 'r' );
      }
    );

    $this->try_part(
      function() use ( $handle ) {
        return flock( $handle, LOCK_SH );
      }
    );

    $json = $this->try_part(
      function() use ( $handle ) {
        $chunks = [];
        while ( ! feof( $handle ) ) {
          $chunk = fread( $handle, 8192 );
          if ( $chunk === false ) { return false; }
          $chunks[] = $chunk;
        }
        return implode( '', $chunks );
      }
    );

    $data = json_decode( $json, true );

    if ( ! $data ) {

      mud_fail( 'invalid data.', [ 'msg' => json_last_error_msg(), 'json' => $json ] );

    }

    foreach ( $data[ $group ] as $key => $val ) {

      if ( $val === $value ) {

        $result = $key;

        break;

      }
    }

    $this->try_part(
      function() use ( $handle ) {
        return flock( $handle, LOCK_UN );
      }
    );

    $this->try_part(
      function() use ( $handle ) {
        return fclose( $handle );
      }
    );

    return $result;

  }

  public function get_value( string $group, string $key, mixed $default = null ) : mixed {

    if ( false ) {

      $group_json = mud_json_pretty( $group );
      $key_json = mud_json_pretty( $key );
      $default_json = mud_json_pretty( $default );

      error_log( "get_value( $group_json, $key_json, $default_json )\n" );

    }

    $path = $this->path;

    $handle = $this->try_part(
      function() use ( $path ){
        return fopen( $path, 'r' );
      }
    );

    $this->try_part(
      function() use ( $handle ) {
        return flock( $handle, LOCK_SH );
      }
    );

    $json = $this->try_part(
      function() use ( $handle ) {
        $chunks = [];
        while ( ! feof( $handle ) ) {
          $chunk = fread( $handle, 8192 );
          if ( $chunk === false ) { return false; }
          $chunks[] = $chunk;
        }
        return implode( '', $chunks );
      }
    );

    $data = json_decode( $json, true );

    if ( ! $data ) {

      mud_fail( 'invalid data.', [ 'msg' => json_last_error_msg(), 'json' => $json ] );

    }

    $value = $data[ $group ][ $key ] ?? $default;

    $this->try_part(
      function() use ( $handle ) {
        return flock( $handle, LOCK_UN );
      }
    );

    $this->try_part(
      function() use ( $handle ) {
        return fclose( $handle );
      }
    );

    return $value;

  }

  public function set_value( string $group, string $key, mixed $value ) : void { 

    if ( false ) {

      $group_json = mud_json_pretty( $group );
      $key_json = mud_json_pretty( $key );
      $value_json = mud_json_pretty( $value );

      error_log( "set_value( $group_json, $key_json, $value_json )\n" );

    }

    $path = $this->path;

    $handle = $this->try_part(
      function() use ( $path ){
        return fopen( $path, 'c+' );
      }
    );

    $this->try_part(
      function() use ( $handle ) {
        return flock( $handle, LOCK_EX );
      }
    );

    $json = $this->try_part(
      function() use ( $handle ) {
        $chunks = [];
        while ( ! feof( $handle ) ) {
          $chunk = fread( $handle, 8192 );
          if ( $chunk === false ) { return false; }
          $chunks[] = $chunk;
        }
        return implode( '', $chunks );
      }
    );

    $data = json_decode( $json, true );

    if ( ! $data ) {

      mud_fail( 'invalid data.', [ 'msg' => json_last_error_msg(), 'json' => $json ] );

    }
    else {

      $data[ $group ][ $key ] = $value;

      $json = $this->try_part(
        function() use ( $data ) {
          return mud_json_pretty( $data );
        }
      );

      $this->try_part(
        function() use ( $handle ) {
          return ftruncate( $handle, 0 );
        }
      );

      $this->try_part(
        function() use ( $handle ) {
          return fseek( $handle, 0 );
        }
      );

      $this->try_part(
        function() use ( $handle, $json ) {
          return fwrite( $handle, $json );
        }
      );

      $this->try_part(
        function() use ( $handle ) {
          return fflush( $handle );
        }
      );

    }

    $this->try_part(
      function() use ( $handle ) {
        return flock( $handle, LOCK_UN );
      }
    );

    $this->try_part(
      function() use ( $handle ) {
        return fclose( $handle );
      }
    );

  }

  protected function try_part( $fn ) {

    for ( $try = 1; $try <= 10; $try++ ) {

      $result = $fn();

      if ( $result !== false ) { return $result; }

      usleep( rand( 10, 1000 ) );

    }

    mud_fail( 'failed to execute function.' );

  }
}
