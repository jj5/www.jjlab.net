<?php

define( 'RUNNING', true );

require_once __DIR__ . '/../../../run/run-web.php';

function app_render() {

  try {

    $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

    if ( ! $path_info ) {

      return http_redirect( 'https://www.jjlab.net/' );

    }

    $link = itl()->get_long_link( $path_info ) ?? 'https://www.jjlab.net/';

    if ( strpos( $link, 'equipment.php#' ) !== false ) {

      $parts = explode( '#', $link );

      assert( count( $parts ) === 2 );

      $link = $parts[ 0 ] . '/' . $parts[ 1 ] . '#' . $parts[ 1 ];

    }

    return http_redirect( $link );

  }
  catch ( Throwable $ex ) {

    try {

      mud_log_exception_ignored( $ex );

    }
    catch ( Throwable $ignore ) { ; }

    return http_redirect( 'https://www.jjlab.net/' );

  }
}
