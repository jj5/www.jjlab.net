<?php

require_once __DIR__ . '/../../../../../run/run-web.php';

function app_render() {

  mud_http_cache_forever();

  render_style_headers();

  if ( check_cache_for_version() ) { return; }

  ob_start( 'ob_gzhandler' );

  $style_list = [ 'milligram/normalize.css', 'milligram/milligram.css', 'style.css' ];

  if ( DEBUG ) { $style_list[] = 'debug.css'; }

  foreach ( $style_list as $style ) {

    readfile( __DIR__ . '/../../../res/style/' . $style );

    echo "\n";

  }

  ob_end_flush();

}
