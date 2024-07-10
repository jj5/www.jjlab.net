<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_main();

    default :

      default_redirect( url_base() . '/stats.php' );

  }
}

function render_main() {

  $title = 'Video Stats';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          out_text( "On this page you can find some statistics about my videos." );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_section_stats();

    render_section_about_next();

  render_foot();

}
