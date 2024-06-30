<?php

require_once __DIR__ . '/../app_app.php';

main();

function main() {

  error_reporting( ~0 );
  set_error_handler( 'handle_error' );

  try {

    require_once __DIR__ . '/framework.php';
    require_once __DIR__ . '/spec.php';

    render();

    itl()->save();

  }
  catch ( Throwable $ex ) {

    error_log( $ex->getMessage() );

    throw $ex;

  }
}

function get_version( $command ) {

  $exec = 'svn info ' . escapeshellarg( __FILE__ ) . ' 2>/dev/null';

  $output = shell_exec( $exec );

  if ( $output ) {

    foreach ( explode( "\n", $output ) as $line ) {

      if ( strpos( $line, 'Revision:' ) !== 0 ) { continue; }

      return 'r' . explode( ': ', $line )[ 1 ];

    }
  }

  return md5_file( __FILE__ );

}

function get_full_url() {

  $protocol = 'http://';

  if ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ) {
    
    $protocol = 'https://';

  }

  return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

}

function handle_error( $errno, $errstr ) {

  throw new ErrorException( "Error $errno: $errstr" );

}

function is_john() {

  if ( is_dev() ) { return true; }

  return $_SERVER[ 'REMOTE_ADDR' ] === '139.216.80.100';

}

function is_prod() {

  return $_SERVER[ 'HTTP_HOST' ] === 'www.inthelabwithjayjay.com';

}

function is_dev() {

  return ! is_prod();

}

function dump( $value ) {

  if ( is_prod() ) { return; }

  while ( ob_get_level() ) { ob_end_clean(); }

  echo '<pre>';
  debug_print_backtrace();

  var_dump( $value );

  exit();

}

function get_link( $query ) {

  $new_query = $_GET;

  foreach ( $query as $key => $val ) {

    $new_query[ $key ] = $val;

  }

  return henc( http_build_query( $new_query ) );

}

function get_link_without( $remove_key ) {

  $new_query = $_GET;

  unset( $new_query[ $remove_key ] );

  return henc( http_build_query( $new_query ) );

}

function get_client_width() {

  $cookie = $_COOKIE[ 'sz' ] ?? null;

  if ( ! $cookie ) { return -1; }

  $parts = explode( 'x', $cookie );

  if ( count( $parts ) !== 2 ) { return -1; }

  return (int)$parts[ 0 ];

}
