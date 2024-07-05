<?php

require_once __DIR__ . '/../../../../../inc/framework.php';

function render() {
  
  render_script_headers();

  $script_list = [ 'global/default.js', 'script.js' ];

  if ( DEBUG ) { $script_list[] = 'debug.js'; }

  echo "\"use strict\";\n\n";

  echo "var MUD_CLIENT_VERSION = " . json_encode( MUD_VERSION ) . ";\n";
  echo "var APP_CLIENT_VERSION = " . json_encode( APP_VERSION ) . ";\n\n";

  foreach ( $script_list as $script ) {

    readfile( __DIR__ . '/../../../res/script/' . $script );

    echo "\n";

  }
}
