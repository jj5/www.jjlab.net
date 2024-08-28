<?php

require_once __DIR__ . '/../inc/framework.php';

function main() {

  error_reporting( ~0 );
  set_error_handler( 'handle_error' );

  try {

    require_once JJLAB_DIR . '/src/code/5-module/510-app/inc/framework.php';
    require_once JJLAB_DIR . '/src/code/5-module/510-app/inc/spec.php';

    if ( check_cache( $path ) ) {

      if ( false && is_dev() ) {

        mud_log_5_notice( "cache hit for path: $path" );

      }

      return;

    }

    if ( false && is_prod() ) {

      mud_log_5_notice( "cache miss for path: $path" );

    }

    // 2024-08-13 jj5 - TODO: name these MUDBALL_VERSION and JJLAB_VERSION...
    //
    setcookie( 'MUD_VERSION', MUD_VERSION, $expires = 0, $path = '/' );
    setcookie( 'APP_VERSION', APP_VERSION, $expires = 0, $path = '/' );

    app_render();

    //itl()->save();

  }
  catch ( Throwable $ex ) {

    error_log( $ex->getMessage() );

    throw $ex;

  }
}

function check_cache( &$path = null ) {

  if ( defined( 'NOCACHE' ) && NOCACHE ) {

    //mud_log_5_notice( "cache is disabled." );

    return false;

  }

  $path = $_SERVER[ 'REQUEST_URI' ];
  $query = $_SERVER[ 'QUERY_STRING' ] ?? '';

  if ( ! APP_USE_CACHE ) {

    //mud_log_5_notice( "cache is disabled." );

    return false;

  }

  if ( $query !== '' ) {

    //mud_log_5_notice( "cache disabled due to presence of query string." );

    return false;

  }

  $cache_file_default = get_cache_file( $path, '-default',  $hash, $dir );
  $cache_file_large   = get_cache_file( $path, '-large',    $hash, $dir );

  $cache_file = $cache_file_default;

  if ( get_client_width() >= 1920 && file_exists( "$cache_file_large.gz" ) ) {

    $cache_file = $cache_file_large;

  }

  $json_file = "$cache_file.json";

  if ( ! file_exists( $json_file ) ) {

    //mud_log_5_notice( "JSON cache file '$json_file' missing" );

    return false;

  }

  $gzip_file = "$cache_file.gz";

  if ( ! file_exists( $gzip_file ) ) {

    mud_log_4_warning( "cache file '$gzip_file' missing" );

    return false;

  }

  $filemtime = filemtime( $gzip_file );

  $etag = mud_hash( $filemtime . ( $_COOKIE[ 'sz' ] ?? '' ) );

  header( 'ETag: "' . $etag . '"' );
  header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s', $filemtime ) . ' GMT' );

  //mud_log_5_notice( "ETag is: $etag" );

  // 2024-08-13 jj5 - HACK! The following isn't quite correct, because it doesn't Vary by Accept-Encoding... but let's
  // just hope gzip is always supported and used...
  //
  if ( strpos( trim( $_SERVER[ 'HTTP_IF_NONE_MATCH'] ?? '', ' "' ), $etag ) === 0 ) {

    header( 'HTTP/1.1 304 Not Modified', $replace = true, $response_code = 304 );

    return true;

  }

  $cache_json = json_decode( file_get_contents( "$cache_file.json" ), $assoc = true );

  if ( $cache_json[ 'app' ] !== APP_VERSION || $cache_json[ 'mudball' ] !== MUD_VERSION ) {

    mud_log_4_warning( "cache file '$gzip_file' out of date" );

    return false;

  }

  if ( ! file_exists( $gzip_file ) ) {

    mud_log_4_warning( "cache file '$gzip_file' is missing" );

    return false;

  }

  if ( supports_gzip_compression() ) {

    mud_buffer_clear_all();

    header( 'Content-Encoding: gzip' );

    readfile( $gzip_file );

    return true;

  }

  $gzip_data = file_get_contents( $gzip_file );

  $data = gzdecode( $gzip_data );

  echo $data;

  return true;

}

function check_cache_for_version( &$version = null ) {

  $version = $_GET[ 'v' ] ?? '';

  if ( ! APP_USE_CACHE ) { return false; }

  if ( $version === '' ) { return false; }

  $etag = mud_hash( $version . '|' . $_SERVER[ 'REQUEST_URI' ] );

  header( 'ETag: "' . $etag . '"' );

  if ( trim( $_SERVER[ 'HTTP_IF_NONE_MATCH'] ?? '', ' "' ) === $etag ) {

    header( 'HTTP/1.1 304 Not Modified', $replace = true, $response_code = 304 );

    return true;

  }

  return false;

}

function supports_gzip_compression() {

  if ( ! isset( $_SERVER[ 'HTTP_ACCEPT_ENCODING' ] ) ) { return false; }

  $encodings = $_SERVER[ 'HTTP_ACCEPT_ENCODING' ];

  return stripos( $encodings, 'gzip' ) !== false;

}

main();
