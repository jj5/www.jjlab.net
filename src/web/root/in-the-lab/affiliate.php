<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

        return render_affiliate_main();

    default :

      return default_redirect( url_base() . '/affiliate.php#heading' );

  }
}

function render_affiliate_main() {

  render_head( 'Affiliates' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Affiliates" );

        tag_open( 'p' );

          out_text( 'When possible ' );

          render_link_internal(
            'equipment',
            url_base() . '/equipment.php#heading',
            TITLE_EQUIPMENT,
          );

          out_text( " links are to affiliated vendors." );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Affiliated Vendors', [ 'id' => 'affiliates' ] );

      tag_open( 'p' );

        out_text( 'Following is a list of my affiliates. When possible ' );

        render_link_internal(
          'equipment',
          url_base() . '/equipment.php#heading',
          TITLE_EQUIPMENT,
        );

        out_text( ' links are to affiliates. I may earn a small commission if you purchase after clicking-through ' );
        out_text( 'on an affiliate link. Clicking-through on the green links on the ' );

        render_link_internal(
          'equipment',
          url_base() . '/equipment.php#heading',
          TITLE_EQUIPMENT,
        );

        out_text( ' page is a great way to ' );

        render_link_internal(
          'support the show',
          url_base() . '/support.php#heading',
          TITLE_SUPPORT,
        );

        out_text( ' at no cost to you.' );

      tag_shut( 'p' );

      tag_open( 'ul' );

        foreach ( get_list( Affiliate::class ) as $affiliate ) {

          $text = $affiliate->get_affiliate_name()->to_string();
          $href = $affiliate->get_affiliate_url()->to_string();

          tag_open( 'li' );

            render_link_external(
              $text,
              $href,
              TITLE_LINK_AFFILIATE,
            );

          tag_shut( 'li' );

        }

      tag_shut( 'ul' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
