<?php

class DataFile {

  public $file;
  public $data;

  public function __construct( $path ) {

    $this->file = $path;

    if ( file_exists( $this->file ) ) {

      $json = file_get_contents( $this->file );

      $this->data = json_decode( $json, true );

    }
  }

  public function save() {

    static $flags = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

    $json = json_encode( $this->data, $flags );

    if ( is_string( $json ) && ! json_last_error() ) {

      file_put_contents( $this->file, $json );

      return true;

    }

    return false;

  }
}
