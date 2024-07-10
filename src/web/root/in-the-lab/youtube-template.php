<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_equipment_main();

    default :

      default_redirect( url_base() . '/youtube-template.php' );

  }
}

function verify_equipment( $equipment_list ) {

  $id_map = [];

  foreach ( $equipment_list as $equipment ) {

    $id = $equipment->get_equipment_id();

    if ( array_key_exists( $id, $id_map ) ) { throw new Exception( "Duplicate equipment ID: '$id'" ); }

    $id_map[ $id ] = true;

  }
}

function render_equipment_main() {

  $equipment_list = get_list( Equipment::class );

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

      render_equipment_text( $equipment_list );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
