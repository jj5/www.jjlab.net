<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_sponsor_main();

    default :

      default_redirect( url_base() . '/sponsor.php' );

  }
}

function render_sponsor_main() {

  render_head( 'Sponsors' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Sponsors' );

        tag_text( 'p', 'Super big shout out to my sponsors who help make this possible! Thank you!' );

        tag_open( 'p' );

          out_text( 'Would you like to sponsor the show? You can ' );

          tag_text(
            'a',
            'support the show',
            [
              'href' => url_base() . '/support.php',
              'class' => 'internal',
              'title' => TITLE_SUPPORT,
            ]
          );

          out_text( ' too!' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      tag_text( 'h2', 'Show Sponsors', [ 'id' => 'sponsors' ] );

      tag_text( 'p', 'My most excellent sponsors are:' );

      tag_open( 'ul' );

        foreach ( get_list( Sponsor::class ) as $sponsor ) {

          tag_open( 'li' );

            echo $sponsor->get_link_html();

            out_text( ', who ' );

            out_text( $sponsor->get_sponsor_reason()->to_string() );

          tag_shut( 'li' );

        }

      tag_shut( 'ul' );

      tag_open( 'p' );

        out_text( 'If you would like to ' );

        tag_text(
          'a',
          'support the show',
          [
            'href' => url_base() . '/support.php',
            'class' => 'internal',
            'title' => TITLE_SUPPORT,
          ]
        );

        out_text( ' I would very much appreciate it and the best place to do so is over here:' );

      tag_shut( 'p' );

      tag_open( 'p', [ 'class' => 'indent' ] );

        tag_text(
          'a',
          'patreon.com/JohnElliotV',
          [
            'href' => 'https://www.patreon.com/JohnElliotV',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => TITLE_PATREON,
          ]
        );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( "If you have high-quality products or services which would be of interest to electronics hobbyists and you'd like me to demo, unbox, or teardown on the show," );

        tag_text(
          'a',
          "let's talk",
          [
            'href' => url_base() . '/contact.php',
            'class' => 'internal',
            'title' => TITLE_CONTACT,
          ]
        );

        out_text( '.' );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( "In addition to the sponsors above I also have " );

        tag_text(
          'a',
          "affiliates",
          [
            'href' => url_base() . '/affiliate.php',
            'class' => 'internal',
            'title' => TITLE_AFFILIATE,
          ]
        );

        out_text( " whose products I promote on my " );

        tag_text(
          'a',
          "equipment",
          [
            'href' => url_base() . '/equipment.php',
            'class' => 'internal',
            'title' => TITLE_EQUIPMENT,
          ]
        );

        out_text( ' page.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

  render_foot();

}
