<?php

require_once __DIR__ . '/../../../../../run/run-web.php';

function app_render() {

  mud_http_cache_forever();

  render_script_headers();

  $script_list = [ 'global/default.js', 'script.js' ];

  if ( DEBUG ) { $script_list[] = 'debug.js'; }

  echo "\"use strict\";\n\n";

  echo "var MUD_CLIENT_VERSION = " . json_encode( MUDBALL_VERSION ) . ";\n";
  echo "var APP_CLIENT_VERSION = " . json_encode( JJLAB_VERSION ) . ";\n\n";
  echo "var APP_CANONICAL_DOMAIN = " . json_encode( APP_CANONICAL_DOMAIN ) . ";\n\n";

  foreach ( $script_list as $script ) {

    readfile( __DIR__ . '/../../../res/script/' . $script );

    echo "\n";

  }
}
