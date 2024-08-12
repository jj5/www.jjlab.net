#!/usr/bin/env php
<?php

define( 'APP_ORIGIN', 'http://localhost' );
define( 'APP_ORIGIN_PROD', 'https://www.inthelabwithjayjay.com' );
define( 'APP_RUN_DATE', date( 'Y-m-d H:i:s' ) );

//pcntl_signal( SIGUSR1, 'signal_handler' );

function main( $argv ) {

  $sitemap_url = APP_ORIGIN . '/in-the-lab/sitemap.php';

  $sitemap_content = fetch_sitemap( $sitemap_url );

  $xml = simplexml_load_string( $sitemap_content );

  if ( $xml === false)  {

    die( "error: cannot load XML.\n" );

  }

  $namespaces = $xml->getDocNamespaces( $recursive = true );
  $sitemap_ns = $xml->children( $namespaces[ '' ] );
  $loc_list = [];

  foreach ( $sitemap_ns->url as $url ) {

    $loc = (string) $url->loc;

    if ( strpos( $loc, APP_ORIGIN ) !== 0 ) {

      mud_fail( 'invalid location.', [ 'loc' => $loc, 'origin' => APP_ORIGIN ] );

    }

    $loc_list[] = $loc;

  }

  global $remaining_processes;

  $remaining_processes = count( $loc_list );

  $pid_list = [];

  while ( count( $loc_list ) ) {

    $loc = array_shift( $loc_list );

    $pid = pcntl_fork();

    if ( $pid === -1 ) {

      mud_fail( 'cannot fork.' );

    }
    else if ( $pid === 0 ) {

      // 2024-08-12 jj5 - child process...

      check_default( $loc );

      check_large( $loc );

      // 2024-08-12 jj5 - signal parent process...
      //
      //posix_kill( posix_getppid(), SIGUSR1 );

      exit( 0 );

    }
    else {

      // 2024-08-12 jj5 - parent process...

      $pid_list[] = $pid;

      if ( count( $pid_list ) > 20 ) {

        $pid = pcntl_wait( $status );

        $pid_list = array_filter( $pid_list, function( $pid_cmp ) use ( $pid ) { return $pid_cmp !== $pid; } );

        if ( $status !== 0 ){

          mud_fail( 'child process failed.', [ 'pid' => $pid, 'status' => $status ] );

        }
      }
    }
  }

  foreach ( $pid_list as $pid ) {

    pcntl_waitpid( $pid, $status );

  }
}

function signal_handler( $signo ) {

  global $remaining_processes;

  $remaining_processes--;

  echo "Received signal from child process. Total remaining: {$remaining_processes}\n";

}

// Install the signal handler
function check_default( $loc ) {

  check( $loc );

}

function check_large( $loc ) {

  check( $loc, '-large', 'sz=2746x1770' );

}

function check( $loc, $suffix = '-default', $cookie = null ) {

  $date = APP_RUN_DATE;
  $prod_loc = str_replace( APP_ORIGIN, APP_ORIGIN_PROD, $loc );
  $path = substr( $loc, strlen( APP_ORIGIN ) );

  $cache_file = get_cache_file( $path, $suffix );
  $gzip_file = "$cache_file.gz";
  $json_file = "$cache_file.json";
  $cache_data = file_exists( $gzip_file ) ? gzdecode( file_get_contents( $gzip_file ) ) : null;

  $data = fetch_url( $loc, $cookie, $response_code );

  if ( $suffix === '-large' ) {

    $default_data = fetch_url( $loc, null, $default_response_code );

    if ( $default_data === $data ) {

      echo "skipping large cache: $gzip_file\n";

      return;

    }
  }

  // 2024-08-12 jj5 - NOTE: there was no use case for the date and it messes up the cache so removed now.

  if ( $data === $cache_data ) {

    $json_data = json_decode( file_get_contents( $json_file ), $assoc = true );

    //$json_data[ 'date' ] = $date;
    $json_data[ 'mudball' ] = MUD_VERSION;
    $json_data[ 'app' ] = APP_VERSION;

  }
  else {

    echo "Updating cache: $gzip_file\n";

    $gzip_data = gzencode( $data, 9 );

    $data_size = strlen( $data );
    $gzip_data_size = strlen( $gzip_data );

    $mud_version = MUD_VERSION;
    $app_version = APP_VERSION;

    $json_data = [
      //'date'    => $date,
      'url'     => $prod_loc,
      'cookie'  => $cookie,
      'http'    => $response_code,
      'cache'   => $gzip_file,
      'size'    => $data_size,
      'gzip'    => $gzip_data_size,
      'mudball' => $mud_version,
      'app'     => $app_version,
    ];

    file_put_contents( $gzip_file, $gzip_data );

  }

  $json = json_encode( $json_data, $options = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );

  file_put_contents( $json_file, $json );

}

require_once __DIR__ . '/../../src/code/5-module/510-app/inc/cache.php';
require_once __DIR__ . '/../../run/run-cli.php';
