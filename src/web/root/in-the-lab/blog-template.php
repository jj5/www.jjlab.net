<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_blog_template_main();

    default :

      default_redirect( url_base() . '/blog-template.php' );

  }
}

function render_blog_template_main() {

  $equipment_list = get_list( Equipment::class );

  $count = number_format( count( $equipment_list ) );

  render_head( 'Blog Template', [ 'robots' => 'noindex' ] );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Blog Template' );

        tag_text(
          'p',
          "This is a template blog post.",
        );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      render_blog_template( $equipment_list );

    tag_shut( 'section' );

  render_foot();

}
