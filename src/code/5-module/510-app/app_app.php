<?php


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-01-25 jj5 - include dependencies...
//

//require_once __DIR__ . '/../470-url/app_url.php';
require_once __DIR__ . '/../../1-bootstrap/4-config.php';


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-01-25 jj5 - include components...
//

//require_once __DIR__ . '/class/AppFactory.php';

require_once realpath( __DIR__ ) . '/../../../../inc/log.php';

require_once realpath( __DIR__ ) . '/../../../../ext/mudball/inc/module.php';

require_once __DIR__ . '/inc/framework.php';
require_once __DIR__ . '/inc/const.php';
require_once __DIR__ . '/inc/cache.php';
require_once __DIR__ . '/inc/http.php';
require_once __DIR__ . '/inc/view.php';

require_once realpath( __DIR__ ) . '/../../../../vendor/autoload.php';

mud_load_deep_breadth_first( __DIR__ . '/1-interface' );
mud_load_deep_breadth_first( __DIR__ . '/2-trait' );
mud_load_deep_breadth_first( __DIR__ . '/3-model' );
mud_load_deep_breadth_first( __DIR__ . '/4-define' );
mud_load_deep_breadth_first( __DIR__ . '/5-class' );


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-01-25 jj5 - service locators...
//

function itl() {

  static $instance = null;

  if ( $instance === null ) { $instance = new ItlData2(); }

  return $instance;

}

function app_stash() : AppStash {

  static $instance = null;

  if ( $instance === null ) { $instance = new AppStash(); }

  return $instance;

}


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-01-26 jj5 - functional interface...
//


function new_value( string $class, mixed $arg ) {

  return app_stash()->new_value( $class, $arg );

}

function new_thing( string $class, array $args ) {

  return app_stash()->new_thing( $class, $args );

}

function get_item_by_slug( string $class, string $slug ) {

  return app_stash()->get_item_by_slug( $class, $slug );

}

function get_item_by_name( string $class, string $name ) {

  return app_stash()->get_item_by_name( $class, $name );

}

function get_list( string $class ) {

  return app_stash()->get_list( $class );

}

function get_last( string $class ) {

  return app_stash()->get_last( $class );

}

function trim_args( array $args ) {

  return app_stash()->trim_args( $args );

}

function get_html_id( $string ) {

  return app_stash()->get_html_id( $string );

}
