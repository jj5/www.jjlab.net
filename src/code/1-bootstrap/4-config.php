<?php

require_once __DIR__ . '/3-lookup.php';

global $config;

if ( file_exists( JJLAB_CONFIG_PATH ) ) {

  require_once JJLAB_CONFIG_PATH;

}

mud_define_version( 'JJLAB' );

mud_define_app( 'JJLAB' );
