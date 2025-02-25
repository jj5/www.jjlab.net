<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_about_main();

    default :

      return default_redirect( url_base() . '/about.php#heading' );

  }
}

function render_about_main() {

  render_head( 'About the Website' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "About the Website" );

        tag_text( 'p', 'This website is for the video blog of John Elliot V who is affectionately known as Jay Jay.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_section_about_the_show();

    render_section_about_jay_jay();

    render_section_about_contact();

    render_section_about_blog();

    render_section_about_wiki();

    render_section_about_announcements();

    render_section_about_records();

    render_section_about_colophon();

    render_section_about_secrets();

    if ( DEV ) {

      render_section_about_jjcode();

    }

    render_section_about_shortcuts();

    render_section_about_next();

  render_foot();

}
