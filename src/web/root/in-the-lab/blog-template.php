<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_blog_template_main();

    default :

      default_redirect( url_base() . '/blog-template.php#heading' );

  }
}

function render_blog_template_main() {

  $equipment_list = Equipment::get_affiliated_list();

  $count = number_format( count( $equipment_list ) );

  render_head( 'Blog Template', [ 'robots' => 'noindex' ] );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Blog Template' );

        tag_open( 'p' );

          out_text( "This is a template blog post that I use as the basis of the show notes. " );
          out_text( "That's cool that you're poking around, but " );

          render_link_external(
            "this isn't the webpage you're looking for...",
            'https://www.youtube.com/watch?v=ihyjXd2C-E8',
            TITLE_LINK_DROIDS,
          );

        tag_shut( 'p' );

        tag_open( 'p' );

          out_text( "Maybe you would like to " );

          render_link_internal(
            "support the show",
            url_base() . '/support.php#heading',
            TITLE_SUPPORT,
          );

          out_text( '? :)' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Blog Template', [ 'id' => 'template' ] );

      tag_open( 'p' );

        out_text( 'This is a template blog post that I use as the basis of the show notes.' );

      tag_shut( 'p' );

      $equipment_list = [ $equipment_list[ random_int( 0, count( $equipment_list ) - 1 ) ] ];

      render_blog_template( $equipment_list );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
