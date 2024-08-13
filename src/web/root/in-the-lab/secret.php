<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_secret_main();

    default :

      default_redirect( url_base() . '/secret.php#heading' );

  }
}

function render_secret_main() {

  render_head( 'Secrets' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Secrets' );

        tag_text( 'p', 'Can you keep a secret? Shhh...' );

        tag_open( 'p' );

          out_text( "These pages are secret because they don't work well on small screens. " );

          out_text( "They are pretty handy though, so I have included them for the brave." );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Secret Pages', [ 'id' => 'secrets' ] );

      tag_text( 'p', 'The secret pages are:' );

      tag_open( 'ul' );

        tag_open( 'li' );

          render_link_internal(
            'Video Index',
            url_base() . '/videos.php#videos',
            TITLE_VIDEO_INDEX,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal(
            'Book Index',
            url_base() . '/books.php#books',
            TITLE_BOOK_INDEX,
          );

        tag_shut( 'li' );

      tag_shut( 'ul' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
