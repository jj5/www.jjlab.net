<?php

require_once __DIR__ . '/../inc/framework.php';

function host_cli( $argv ) {

  error_reporting( ~0 );
  set_error_handler( 'handle_error' );

  try {

    require_once APP_DIR . '/src/code/5-module/510-app/inc/framework.php';
    require_once APP_DIR . '/src/code/5-module/510-app/inc/spec.php';

    main( $argv );

  }
  catch ( Throwable $ex ) {

    error_log( $ex->getMessage() );

    throw $ex;

  }
}

host_cli( $argv );
