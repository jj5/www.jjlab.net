<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_youtube_template_main();

    default :

      default_redirect( url_base() . '/youtube-template.php' );

  }
}

function render_youtube_template_main() {

  // 2024-08-07 jj5 - space in the YouTube description is at a premium, so we only want to include equipment that we
  // can link to with an affiliate link. At the moment that means eBay and AliExpress.

  static $ad_list = [
    'https://www.ebay.com/',
    'https://www.ebay.com.au/',
    'https://www.aliexpress.com/',
  ];

  static $ignore_list = [
    'https://www.amazon.com/',
    'https://www.amazon.com.au/',
    'https://www.altronics.com.au/',
    'https://www.bunnings.com.au/',
    'https://www.dyson.com/',
    'https://www.wasdkeyboards.com/',
  ];

  $raw_equipment_list = get_list( Equipment::class );

  $equipment_list = [];

  foreach ( $raw_equipment_list as $equipment ) {

    $affiliate_list = $equipment->get_affiliate_link_list();

    foreach ( $affiliate_list as $affiliate_link ) {

      $url = $affiliate_link->get_equipment_url()->to_string();

      foreach ( $ad_list as $ad ) {

        if ( strpos( $url, $ad ) === 0 ) {

          $equipment_list[] = $equipment;

          continue 3;

        }
      }

      if ( DEBUG ) {

        foreach ( $ignore_list as $ignore ) {

          if ( strpos( $url, $ignore ) === 0 ) {

            continue 3;

          }
        }

        // 2024-08-07 jj5 - if we find something we don't know about yet make some noise so I can add it to the list.

        dump( $url );

      }
    }
  }

  verify_equipment( $equipment_list );

  render_head( 'YouTube Template' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'YouTube Template' );

        tag_open( 'p' );

          out_text( "This is a template YouTube post that I use as the basis of the description of my YouTube videos. " );
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
            url_base() . '/support.php',
            TITLE_SUPPORT,
          );

          out_text( '? :)' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'YouTube Template', [ 'id' => 'template' ] );

      tag_open( 'p' );

        out_text( 'This is a template YouTube post that I use as the basis of the description of my YouTube videos.' );

      tag_shut( 'p' );

      render_youtube_template( $equipment_list );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}