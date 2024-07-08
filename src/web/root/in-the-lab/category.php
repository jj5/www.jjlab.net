<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $category_map = get_category_map();

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  if ( $path_info ) {

    $category_id = ltrim( $path_info, '/' );

    $category = $category_map[ $category_id ] ?? null;

    if ( ! $category ) {

      default_redirect( url_base() . '/category.php' );

    }

    $equipment_list = $category->get_equipment_list();

    return render_equipment_list_for_category( $category, $equipment_list );

  }

  return render_index( array_values( $category_map ) );

}

function render_equipment_list_for_category( $category, $equipment_list ) {

  $category_name = $category->to_string();
  $count = count( $equipment_list );
  $title = "Equipment Category: $category_name";

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        if ( $count === 1 ) {

          tag_text( 'p', "I have one piece of equipment in this category."  );

        }
        else {

          $number = NUMBER_MAP[ $count ] ?? $count;

          tag_text( 'p', "I have $number pieces of equipment in this category."  );

        }

        render_equipment_header( $equipment_list );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_equipment( $equipment_list );

  render_foot();

}

function render_index( $category_list ) {

  render_head( 'Category Index' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Category Index" );

        tag_open( 'p' );

          out_text( 'These are the categories of equipment I own.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      tag_text( 'h2', 'Equipment Categories', [ 'id' => 'categories' ] );

      tag_open( 'p' );

        out_text( 'In addition to these categories you can also get a report by ' );

        tag_text(
          'a',
          'manufacturer',
          [
            'href' => url_base() . '/manufacturer.php',
            'class' => 'internal',
            'title' => TITLE_LINK_MANUFACTURER,
          ]
        );

        out_text( '.' );

      tag_shut( 'p' );

      Category::sort_alphabetical( $category_list );

      tag_open( 'table', [ 'class' => 'nice-table sortable' ] );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Category' );
            tag_text( 'th', 'Items In This Category' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          $row_number = 1;

          foreach ( $category_list as $category ) {

            tag_open( 'tr' );

              tag_text( 'td', $row_number++, [ 'class' => 'number' ] );

              tag_open( 'td' );

                tag_text(
                  'a',
                  $category->get_category_name(),
                  [
                    'href' => url_base() . '/category.php/' . $category->get_category_id(),
                    'class' => 'internal',
                    'title' => TITLE_LINK_CATEGORY,
                  ]
                );

              tag_shut( 'td' );

              tag_text( 'td', $category->get_equipment_count(), [ 'class' => 'number' ] );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

  render_foot();

}