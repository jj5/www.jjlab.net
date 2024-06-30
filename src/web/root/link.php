<?php

define( 'RUNNING', true );

require_once __DIR__ . '/../../../inc/framework.php';

function render() {

  try {

    $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

    $link = itl()->get_long_link( $path_info ) ?? 'https://www.jjlab.net/';

    http_redirect( $link );

  }
  catch ( Throwable $ex ) {

    try {

      mud_log_exception_ignored( $ex );

    }
    catch ( Throwable $ignore ) { ; }

    http_redirect( 'https://www.jjlab.net/' );

  }
}
