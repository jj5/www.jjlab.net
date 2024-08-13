<?php

require_once __DIR__ . '/../app_app.php';

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
    strpos( $attrs[ 'href' ], 'https://www.inthelabwithjayjay.com/' ) !== 0
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
