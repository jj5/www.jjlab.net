<?php

define( 'APP_ORIGIN', 'http://localhost' );
define( 'APP_DEFAULT_CACHE_SUFFIX', '-default' );

function main( $argv ) {

  $sitemap_url = APP_ORIGIN . '/in-the-lab/sitemap.php';

  $sitemap_content = fetch_sitemap( $sitemap_url );

  $xml = simplexml_load_string( $sitemap_content );

  if ( $xml === false)  {
    
    die( "error: cannot load XML.\n" );

  }

  $namespaces = $xml->getDocNamespaces( $recursive = true );
  $sitemap_ns = $xml->children( $namespaces[ '' ] );

  foreach ( $sitemap_ns->url as $url ) {

    $loc = (string) $url->loc;

    assert( strpos( $loc, APP_ORIGIN ) === 0 );

    check_default( $loc );    
    check_large( $loc );    

  }
}

function check_default( $loc ) {

  check( $loc );

}

function check_large( $loc ) {

  check( $loc, '-large', 'sz=2746x1770' );

}

function check( $loc, $suffix = APP_DEFAULT_CACHE_SUFFIX, $cookie = null ) {

  $path = substr( $loc, strlen( APP_ORIGIN ) );

  $cache_file = get_cache_file( $path, $suffix );

  $cache_data = file_exists( $cache_file ) ? file_get_contents( $cache_file ) : null;

  $data = fetch_url( $loc, $cookie );

  if ( $data === $cache_data ) { return; }

  echo "Updating cache: $cache_file\n";

  file_put_contents( $cache_file, $data );

}

function fetch_sitemap( $url ) {

  return fetch_url( $url );

}

function fetch_url( $url, $cookie = null ) {

  $ch = curl_init();

  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

  if ( $cookie ) {

    curl_setopt( $ch, CURLOPT_COOKIE, $cookie );

  }

  $output = curl_exec($ch);

  curl_close($ch);

  return $output;

}

function get_cache_file(
  string $path,
  string $suffix = APP_DEFAULT_CACHE_SUFFIX,
  &$hash = null,
  &$dir = null
) {

  $dir = get_cache_dir( $path, $suffix, $hash );

  $file = "{$hash}{$suffix}.dat";

  return "$dir/$file";

}

function get_cache_dir( string $path, string $suffix = APP_DEFAULT_CACHE_SUFFIX, &$hash = null ) {

  $hash = get_path_hash( $path );

  $dir = APP_BASE . "/dat/cache/{$hash[0]}/{$hash[1]}/{$hash[2]}";

  if ( ! is_dir( $dir ) ) {

    if ( ! mkdir( $dir, 0777, $recursive = true ) ) {

      die( "error: failed to create cache dir: $dir\n" );

    }
  }

  return $dir;

}

function get_path_hash( $path ) {

  return hash( 'sha512/224', $path, $raw_output = false );

}

require_once __DIR__ . '/../../run/run-cli.php';
