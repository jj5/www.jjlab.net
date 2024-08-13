<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $manufacturer_map = get_manufacturer_map();

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  if ( $path_info ) {

    $manufacturer_id = ltrim( $path_info, '/' );

    $manufacturer = $manufacturer_map[ $manufacturer_id ] ?? null;

    if ( ! $manufacturer ) {

      default_redirect( url_base() . '/manufacturer.php' );

    }

    $equipment_list = $manufacturer->get_equipment_list();

    return render_equipment_list_for_manufacturer( $manufacturer, $equipment_list );

  }

  return render_manufacturer_index( array_values( $manufacturer_map ) );

}

function render_manufacturer_index( $manufacturer_list ) {

  $title = 'Equipment Manufacturer Index';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          out_text( 'I own equipment from these manufacturers.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Equipment Manufacturers', [ 'id' => 'manufacturers' ] );

      tag_open( 'p' );

        out_text( 'In addition to these manufacturers you can also get a report by ' );

        render_link_internal(
          'category',
          url_base() . '/category.php',
          TITLE_LINK_CATEGORY,
        );

        out_text( '.' );

      tag_shut( 'p' );

      Manufacturer::sort_alphabetical( $manufacturer_list );

      tag_open( 'table', [ 'class' => 'nice-table sortable' ] );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Manufacturer' );
            tag_text( 'th', 'Types of Equipment From This Manufacturer' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          $row_number = 1;

          foreach ( $manufacturer_list as $manufacturer ) {

            tag_open( 'tr' );

              tag_text( 'td', $row_number++, [ 'class' => 'number' ] );

              tag_open( 'td' );

                render_link_internal(
                  $manufacturer->get_manufacturer_name(),
                  url_base() . '/manufacturer.php/' . $manufacturer->get_manufacturer_id() . '#heading',
                  TITLE_LINK_MANUFACTURER,
                );

              tag_shut( 'td' );

              tag_text( 'td', $manufacturer->get_equipment_count(), [ 'class' => 'number' ] );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}

function render_equipment_list_for_manufacturer( $manufacturer, $equipment_list ) {

  $manufacturer_name = $manufacturer->to_string();
  $count = count( $equipment_list );
  $title = "Equipment from $manufacturer_name";

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        if ( $count === 1 ) {

          tag_text( 'p', "I have one type of equipment from $manufacturer_name."  );

        }
        else {

          $number = NUMBER_MAP[ $count ] ?? $count;

          tag_text( 'p', "I have $number types of of equipment from $manufacturer_name."  );

        }

        render_equipment_header( $equipment_list );

      tag_shut( 'section' );

    tag_shut( 'header' );

    if ( $manufacturer_name === 'Maxitronix' ) {

      tag_open( 'section' );

        tag_text( 'h2', "Maxitronix Xin1 Kits", [ 'id' => 'maxitronix-kits' ] );

        tag_open( 'p' );

          out_text( "If you're interested in the Maxitronix kits you might like to check out " );

          render_link_internal(
            'my Maxitronix Xin1 videos',
            url_base() . '/feature.php/maxitronix#heading',
            TITLE_FEATURE_MAXITRONIX,
          );

          out_text( '.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    }
    elseif ( $manufacturer_name === 'Yum Cha' ) {

      tag_open( 'section' );

        tag_text( 'h2', "Yum Cha Brand", [ 'id' => 'yum-cha' ] );

        tag_open( 'p' );

          out_text( 'When I don\'t know the brand name I call the manufacturer "Yum Cha".' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    }

    render_equipment( $equipment_list );

    render_section_about_next();

  render_foot();

}
