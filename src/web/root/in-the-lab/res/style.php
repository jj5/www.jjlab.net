<?php

require_once __DIR__ . '/../../../../../inc/framework.php';

function render() {
  
  render_style_headers();

  $style_list = [ 'milligram/normalize.css', 'milligram/milligram.css', 'style.css' ];

  if ( DEBUG ) { $style_list[] = 'debug.css'; }

  foreach ( $style_list as $style ) {

    readfile( __DIR__ . '/../../../res/style/' . $style );

    echo "\n";

  }
}
