<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_equipment_index();

    default :

      $product_id = ltrim( $path_info, '/' );

      $equipment_list = get_equipment();

      foreach ( $equipment_list as $equipment ) {

        if ( $equipment->get_equipment_id() === $product_id ) {

          return render_equipment_page( [ $equipment ] );

        }
      }

      return default_redirect( url_base() . '/equipment.php#heading' );

  }
}

function get_equipment() {

  $equipment_list = get_list( Equipment::class );

  if ( mud_is_debug() ) { verify_equipment( $equipment_list ); }

  return $equipment_list;

}

function render_equipment_index() {

  $equipment_list = get_equipment();

  render_equipment_page( $equipment_list );

}

function render_equipment_page( $equipment_list ) {

  $count = count( $equipment_list );

  $item = $count === 1 ? $equipment_list[ 0 ] : null;

  $count_formatted = number_format( $count );

  render_head( $count === 1 ? $item->get_equipment_name() : 'Equipment' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        if ( $item ) {

          tag_text( 'h1', $item->get_equipment_name() );

        }
        else {

          tag_text( 'h1', 'Equipment' );

        }

        if ( $item ) {

          tag_text(
            'p',
            "Here is some info about where you can buy the " . $item->get_equipment_name() . ".",
          );

        }
        else {

          tag_text(
            'p',
            "Here is a list of $count_formatted types of product which I use. These products may appear in my videos.",
          );

        }

        render_equipment_header( $equipment_list );

      tag_shut( 'section' );

    tag_shut( 'header' );

    if ( ! $item ) {

      render_equipment_disclaimer( $count );

    }

    //mud_dump( $equipment_list );

    render_equipment( $equipment_list );

    render_section_about_next();

  render_foot();

}

function render_table_head() {

  tag_open( 'tr' );

    tag_text( 'th', 'Equipment' );
    tag_text( 'th', 'Affiliate' );
    tag_text( 'th', 'Price' );
    tag_text( 'th', 'Shipping' );
    tag_text( 'th', 'Total' );
    tag_text( 'th', 'Affiliate Link' );
    tag_text( 'th', 'Option(s)' );

    if ( is_dev() ) {

      tag_text( 'th', 'Search' );

    }

  tag_shut( 'tr' );

}
