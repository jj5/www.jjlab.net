<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_main();

    default :

      default_redirect( url_base() . '/shoutout.php' );

  }
}

function render_main() {

  $title = 'Shoutout';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          out_text( "Not only am I a YouTube creator, I am also a YouTube viewer!" );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Shoutout to My Homies!', [ 'id' => 'shoutout' ] );

      tag_open( 'p' );

        out_text( "Man, I love the long tail. There is so much interesting stuff on the web theses days, " );
        out_text( "including on YouTube. On this page I wanted to let you know about some of the people who I follow. " );
        out_text( "I can't list everyone, so the criteria for this list is whether I sponsor them on Patreon or not. ");
        out_text( "Yes, I do sponsor people on Patreon! Don't you? :)" );

      tag_shut( 'p' );

      tag_open( 'table' );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Video Blogger' );
            tag_text( 'th', 'YouTube Channel' );
            tag_text( 'th', 'Patreon' );
            tag_text( 'th', 'Website' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          tag_open( 'tr' );

            tag_text( 'td', '1' );
            tag_text( 'td', 'Dave Jones on the EEVblog' );
            tag_open( 'td' );
              tag_text(
                'a',
                'youtube.com/@EEVblog',
                [
                  'href' => 'https://www.youtube.com/@EEVblog',
                  'class' => 'external',
                  'target' => '_blank',
                  'rel' => 'noopener follow',
                  'title' => 'Subscribe to the EEVblog!',
                ]
              );
            tag_shut( 'td' );
            tag_open( 'td' );
              tag_text(
                'a',
                'patreon.com/EEVblog',
                [
                  'href' => 'https://www.patreon.com/eevblog',
                  'class' => 'external',
                  'target' => '_blank',
                  'rel' => 'noopener follow',
                  'title' => 'Subscribe to the EEVblog!',
                ]
              );
            tag_shut( 'td' );
            tag_open( 'td' );
              tag_text(
                'a',
                'https://www.youtube.com/@EEVblog',
                [
                  'href' => 'https://www.youtube.com/@EEVblog',
                  'class' => 'external',
                  'target' => '_blank',
                  'rel' => 'noopener follow',
                  'title' => 'Subscribe to the EEVblog!',
                ]
              );
            tag_shut( 'td' );

          tag_shut( 'tr' );

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h2', 'Dave Jones on the EEVblog', [ 'id' => 'eevblog' ] );

      tag_open( 'p' );


      tag_shut( 'p' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
