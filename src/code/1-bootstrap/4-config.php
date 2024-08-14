<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-08-14 jj5 - trace load if enabled...
//

if ( defined( 'APP_TRACE_LOAD' ) && APP_TRACE_LOAD ) {

  error_log( "loading: " . __FILE__ );

}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-08-14 jj5 - include dependencies...
//

require_once __DIR__ . '/3-lookup.php';

global $config;

if ( file_exists( JJLAB_CONFIG_PATH ) ) {

  require_once JJLAB_CONFIG_PATH;

}

mud_define_version( 'JJLAB' );

/*
if ( APP === JJLAB_CODE ) {

  mud_define_app( 'JJLAB' );

}
*/
