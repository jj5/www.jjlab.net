<?php

if ( ! defined( 'APP_DIR' ) ) {

  define( 'APP_DIR', realpath( __DIR__ . '/../' ) );

  define( 'APP_RES_DIR', APP_DIR . '/src/web/res' );

}

function get_resource_version( string $resource_name ) {

  $path = find_image( $resource_name );

  if ( $path ) { return md5_file( $path ); }

  mud_fail( 'cannot find resource.', [ 'resource_name' => $resource_name ] );

  static $version = JJLAB_CODE . '-' . JJLAB_VERSION_MAJOR . '.' . JJLAB_VERSION_MINOR . '.' . JJLAB_VERSION_PATCH;

  return $version;

}

function get_resource_version_for_dir( string $resource_dir ) {

  static $pattern_map = [
    'script'  => '/^.+\.js$/i',
    'style'   => '/^.+\.css$/i',
  ];

  $path = APP_RES_DIR . "/$resource_dir";

  $dir_iterator = new RecursiveDirectoryIterator( $path );

  $iterator = new RecursiveIteratorIterator( $dir_iterator );

  $regex_iterator = new RegexIterator( $iterator, $pattern_map[ $resource_dir ], RecursiveRegexIterator::GET_MATCH );

  $hash = md5( $resource_dir );

  foreach ( $regex_iterator as $matches ) {

    $file_path = $matches[ 0 ];

    $hash = md5( $hash . md5_file( $file_path ) );

  }

  return $hash;

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
