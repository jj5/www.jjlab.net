<?php

if ( ! defined( 'APP_DIR' ) ) {

  define( 'APP_DIR', realpath( __DIR__ . '/../' ) );

}

function get_resource_version() {

  static $version = JJLAB_CODE . '-' . JJLAB_VERSION_MAJOR . '.' . JJLAB_VERSION_MINOR . '.' . JJLAB_VERSION_PATCH;

  return $version;

}

function custom_assert_handler( $file, $line, $code, $desc = null ) {
  
  $message = "Assertion failed in $file on line $line: $code" . ( $desc ? " - $desc" : "" );

  error_log( $message );
    
  http_response_code( 500 );

  throw new AssertionError( $message, $code ?? 0 );

}

// Set the custom assertion handler
assert_options( ASSERT_CALLBACK, 'custom_assert_handler' );

require_once __DIR__ . '/../src/code/5-module/510-app/inc/framework.php';
