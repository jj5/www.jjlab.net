<?php

if ( ! defined( 'JJLAB_DIR' ) ) {

  define( 'JJLAB_DIR', realpath( __DIR__ . '/../../../../../' ) );

  define( 'APP_RES_DIR', JJLAB_DIR . '/src/web/res' );

}

if ( is_cache_request() ) {

  define( 'DEBUG', false );
  define( 'DEV', false );
  define( 'BETA', false );
  define( 'PROD', true );

}

assert_options( ASSERT_CALLBACK, 'custom_assert_handler' );

function is_cache_request() {

  static $is_cache_request = null;

  if ( $is_cache_request === null ) {

    $cache = $_COOKIE[ 'cache' ] ?? false;

    $is_cache_request = ( $cache !== false );

  }

  return $is_cache_request;

}

function get_resource_version( string $resource_name ) {

  $path = find_image( $resource_name );

  if ( $path ) { return mud_hash_file( $path ); }

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

  $hash = mud_hash( $resource_dir );

  foreach ( $regex_iterator as $matches ) {

    $file_path = $matches[ 0 ];

    $hash = mud_hash( $hash . mud_hash_file( $file_path ) );

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
function get_version( $command ) {

  $exec = 'svn info ' . escapeshellarg( __FILE__ ) . ' 2>/dev/null';

  $output = shell_exec( $exec );

  if ( $output ) {

    foreach ( explode( "\n", $output ) as $line ) {

      if ( strpos( $line, 'Revision:' ) !== 0 ) { continue; }

      return 'r' . explode( ': ', $line )[ 1 ];

    }
  }

  return mud_hash_file( __FILE__ );

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

  if ( is_cache_request() ) { return false; }

  if ( is_dev() ) { return true; }

  // 2024-07-23 jj5 - NOTE: we can use the IP address if we need to, but it's not necessary for now.

  return false;

  return $_SERVER[ 'REMOTE_ADDR' ] === '139.216.80.100';

}

function is_prod() {

  if ( is_cache_request() ) { return true; }

  return PROD;



  static $result = null;

  if ( $result === null ) {

    $host = $_SERVER[ 'HTTP_HOST' ] ?? null;

    $result = ( $host === 'www.inthelabwithjayjay.com' );

  }

  return $result;

}

function is_dev() {

  if ( is_cache_request() ) { return false; }

  return DEV;


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

  return http_build_query( $new_query );

}

function get_link_without( $remove_key ) {

  $new_query = $_GET;

  unset( $new_query[ $remove_key ] );

  return http_build_query( $new_query );

}

function get_client_width() {

  $cookie = $_COOKIE[ 'sz' ] ?? null;

  if ( ! $cookie ) { return -1; }

  $parts = explode( 'x', $cookie );

  if ( count( $parts ) !== 2 ) { return -1; }

  return (int)$parts[ 0 ];

}

function render_link_external( string $text, string $href, string $title, array $attrs = [] ) {

  $attrs += [
    'class' => 'external',
    'target' => '_blank',
    'rel' => 'noopener follow',
    'href' => $href,
    'title' => $title,
  ];

  assert( $attrs[ 'target' ] === '_blank' );
  assert( $attrs[ 'rel' ] === 'noopener follow' );

  tag_text( 'a', $text, $attrs );

}

function render_link_external_img( string $img_src, string $href, string $title, array $img_attrs = [] ) {

  $a_attrs = [
    'class' => 'external',
    'target' => '_blank',
    'rel' => 'noopener follow',
    'href' => $href,
    'title' => $title,
  ];

  assert( $a_attrs[ 'target' ] === '_blank' );
  assert( $a_attrs[ 'rel' ] === 'noopener follow' );

  $img_attrs += [
    'loading' => 'lazy',
    'src' => $img_src,
  ];

  if ( ! isset( $img_attrs[ 'alt' ] ) ) { $img_attrs[ 'alt' ] = $title; }

  tag_open( 'a', $a_attrs );

    tag_bare( 'img', $img_attrs );

  tag_shut( 'a' );

}

function render_link_internal( string $text, string $href, string $title, array $attrs = [] ) {

  $attrs += [
    'class' => 'internal',
    'rel' => 'follow',
    'href' => $href,
    'title' => $title,
  ];

  assert( $attrs[ 'rel' ] === 'follow' );

  assert( strlen( $attrs[ 'href' ] ) > 0 );

  if (
    $attrs[ 'href' ][ 0 ] !== '#' &&
    strpos( $attrs[ 'href' ], url_base() ) !== 0 &&
    strpos( $attrs[ 'href' ], 'https://www.inthelabwithjayjay.com/' ) !== 0 &&
    strpos( $attrs[ 'href' ], 'https://jj5.net/' ) !== 0
  ) {

    //var_dump( $attrs ); exit;

    mud_fail( 'Internal link not on this site', $attrs );

  }

  tag_text( 'a', $text, $attrs );

}

function render_link_internal_root( string $text, string $href, string $title, array $attrs = [] ) {

  $attrs += [
    'class' => 'internal',
    'rel' => 'follow',
    'href' => $href,
    'title' => $title,
  ];

  assert( $attrs[ 'rel' ] === 'follow' );

  assert( strlen( $attrs[ 'href' ] ) > 0 );

  assert( $attrs[ 'href' ][ 0 ] === '/' );

  tag_text( 'a', $text, $attrs );

}

function render_link_internal_nofollow( string $text, string $href, string $title, array $attrs = [] ) {

  $attrs += [
    'class' => 'internal',
    'rel' => 'nofollow',
    'href' => $href,
    'title' => $title,
  ];

  assert( $attrs[ 'rel' ] === 'nofollow' );

  assert( strlen( $attrs[ 'href' ] ) > 0 );

  assert(
    $attrs[ 'href' ][ 0 ] === '?' ||
    $attrs[ 'href' ][ 0 ] === '#' ||
    strpos( $attrs[ 'href' ], url_base() ) === 0
  );

  tag_text( 'a', $text, $attrs );

}

function render_link_internal_img( string $img_src, string $href, string $title, array $img_attrs = [] ) {

  $a_attrs = [
    'class' => 'internal',
    'rel' => 'follow',
    'href' => $href,
    'title' => $title,
  ];

  assert( $a_attrs[ 'rel' ] === 'follow' );

  tag_open( 'a', $a_attrs );

    tag_bare(
      'img',
      $img_attrs + [
        'loading' => 'eager',
        'src' => $img_src,
        'alt' => $title,
      ]
    );

  tag_shut( 'a' );

}

function verify_equipment( $equipment_list ) {

  if ( ! DEBUG ) { return; }

  $id_map = [];

  foreach ( $equipment_list as $equipment ) {

    $id = $equipment->get_equipment_id();

    if ( array_key_exists( $id, $id_map ) ) { throw new Exception( "Duplicate equipment ID: '$id'" ); }

    $id_map[ $id ] = true;

  }
}

function find_image( string $filename, string $dir = APP_RES_DIR ) {

  return find_resource( $filename, $dir );

}

function find_resource( string $filename, string $dir = APP_RES_DIR ) {

  if ( ! is_dir( $dir ) ) { return null; }

  foreach ( scandir( $dir ) as $file ) {

    if ( $file === '.' || $file === '..' ) { continue; }

    if ( is_dir( $dir . '/' . $file ) ) {

      $path = find_image( $filename, $dir . '/' . $file );

      if ( $path !== null ) { return $path; }

    }
    elseif ( $file === $filename ) {

      return $dir . '/' . $file;

    }
  }

  return null;

}
