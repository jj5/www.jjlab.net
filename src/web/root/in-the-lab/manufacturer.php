<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

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

  return render_index( array_values( $manufacturer_map ) );

}

function render_equipment_list_for_manufacturer( $manufacturer, $equipment_list ) {

  $manufacturer_name = $manufacturer->to_string();
  $count = count( $equipment_list );

  render_head( "Equipment From $manufacturer_name" );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Equipment From $manufacturer_name" );

        if ( $count === 1 ) {

          tag_text( 'p', "I have one piece of equipment from $manufacturer_name."  );

        }
        else {

          $number = NUMBER_MAP[ $count ] ?? $count;

          tag_text( 'p', "I have $number pieces of equipment from $manufacturer_name."  );

        }

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_equipment( $equipment_list );

  render_foot();

}

function render_index( $manufacturer_list ) {

  render_head( "Manufacturer Index" );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Manufacturer Index" );

        tag_open( 'p' );

          out_text( 'I own equipment from these manufacturers.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      tag_text( 'h2', 'Equipment Manufacturers' );

      tag_open( 'p' );

        out_text( 'In addition to these manufacturers you can also get a report by ' );

        tag_text(
          'a',
          'category',
          [
            'href' => url_base() . '/category.php',
            'class' => 'internal',
            'title' => TITLE_LINK_CATEGORY,
          ]
        );

        out_text( '.' );

      tag_shut( 'p' );

      Manufacturer::sort_alphabetical( $manufacturer_list );

      tag_open( 'table', [ 'class' => 'nice-table sortable' ] );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Manufacturer' );
            tag_text( 'th', 'Items From This Manufacturer' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          $row_number = 1;

          foreach ( $manufacturer_list as $manufacturer ) {

            tag_open( 'tr' );

              tag_text( 'td', $row_number++, [ 'class' => 'number' ] );

              tag_open( 'td' );

                tag_text(
                  'a',
                  $manufacturer->get_manufacturer_name(),
                  [
                    'href' => url_base() . '/manufacturer.php/' . $manufacturer->get_manufacturer_id(),
                    'class' => 'internal',
                    'title' => TITLE_LINK_MANUFACTURER,
                  ]
                );

              tag_shut( 'td' );

              tag_text( 'td', $manufacturer->get_equipment_count(), [ 'class' => 'number' ] );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

  render_foot();

}