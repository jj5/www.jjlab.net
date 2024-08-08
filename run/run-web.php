<?php

require_once __DIR__ . '/../inc/framework.php';

function main() {

  error_reporting( ~0 );
  set_error_handler( 'handle_error' );

  try {

    require_once APP_BASE . '/src/code/5-module/510-app/inc/framework.php';
    require_once APP_BASE . '/src/code/5-module/510-app/inc/spec.php';

    app_render();

    itl()->save();

  }
  catch ( Throwable $ex ) {

    error_log( $ex->getMessage() );

    throw $ex;

  }
}

main();
