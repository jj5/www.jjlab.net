<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_equipment_main();

    default :

      $product_id = ltrim( $path_info, '/' );

      $equipment_list = get_equipment();

      foreach ( $equipment_list as $equipment ) {

        if ( $equipment->get_equipment_id() === $product_id ) {

          return render_equipment_page( [ $equipment ] );

        }
      }

      default_redirect( url_base() . '/equipment.php' );

  }
}

function verify_equipment( $equipment_list ) {

  if ( ! DEBUG ) { return; }

  $id_map = [];

  foreach ( $equipment_list as $equipment ) {

    $id = $equipment->get_equipment_id();

    if ( array_key_exists( $id, $id_map ) ) { throw new Exception( "Duplicate equipment ID: '$id'" ); }

    $id_map[ $id ] = true;

  }
}

function get_equipment() {

  $equipment_list = get_list( Equipment::class );

  if ( DEBUG ) { verify_equipment( $equipment_list ); }

  return $equipment_list;

}

function render_equipment_main() {

  $equipment_list = get_equipment();

  render_equipment_page( $equipment_list );

}

function render_equipment_page( $equipment_list ) {

  $count = count( $equipment_list );

  $item = $count === 1 ? $equipment_list[ 0 ] : null;

  $count_formatted = number_format( $count );

  render_head( 'Equipment' );

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
            "Here is a list of $count_formatted products I use which may appear in my videos.",
          );

        }

        tag_text( 'p', 'Click through on the green affiliate links to buy!' );

        render_equipment_notes( $item );

      tag_shut( 'section' );

    tag_shut( 'header' );

    if ( ! $item ) {

      render_equipment_disclaimer( $count );

    }

    render_equipment( $equipment_list );

    if ( $item ) {

      tag_bare( 'hr', [ 'style' => 'border: 1px solid gray;' ] );

      tag_open( 'section' );

        tag_text( 'h2', 'More Information', [ 'id' => 'more-info' ] );

        render_equipment_notes( $item );

      tag_shut( 'section' );

      render_equipment_disclaimer( $count );

    }

  render_foot();

}

function render_equipment_notes( $item ) {

  if ( ! $item ) { return; }

  tag_open( 'p' );

  $wiki_link = $item->get_sixsigma_url()->to_string();

  if ( $wiki_link ) {

    out_text( "If you would like more information about the " );

    tag_text(
      'a',
      $item->get_equipment_name()->to_string(),
      [
        'href' => '#' . $item->get_equipment_id(),
        'class' => 'internal',
        'rel' => 'follow',
        'title' => TITLE_LINK_EQUIPMENT,
      ]
    );

    out_text( " you might like to check out " );

    tag_text(
      'a',
      'my notes',
      [
        'href' => $wiki_link,
        'class' => 'external',
        'target' => '_blank',
        'rel' => 'noopener follow',
        'title' => TITLE_LINK_SIXSIGMA,
      ]
    );

    out_text( '.' );

  }

  tag_shut( 'p' );

  tag_open( 'p' );

    out_text( "If you would like to see all of my equipment check out the " );

    tag_text(
      'a',
      'equipment',
      [
        'href' => url_base() . '/equipment.php',
        'class' => 'internal',
        'rel' => 'follow',
        'title' => TITLE_LINK_EQUIPMENT,
      ]
    );

    out_text( " page. You can also get my equipment indexed by " );

    tag_text(
      'a',
      'category',
      [
        'href' => url_base() . '/category.php',
        'class' => 'internal',
        'rel' => 'follow',
        'title' => TITLE_LINK_CATEGORY,
      ]
    );

    out_text( ' or by ' );

    tag_text(
      'a',
      'manufacturer',
      [
        'href' => url_base() . '/manufacturer.php',
        'class' => 'internal',
        'rel' => 'follow',
        'title' => TITLE_LINK_MANUFACTURER,
      ]
    );

    out_text( '.' );

  tag_shut( 'p' );

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

function render_equipment_disclaimer( $count ) {

  tag_open( 'section' );

    if ( $count === 1 ) {

      tag_text( 'h2', 'Things to Be Aware Of', [ 'id' => 'note' ] );

    }
    else {

      tag_text( 'h2', 'Check Out My Tools and Equipment Detailed on This Page', [ 'id' => 'intro' ] );

    }

    tag_open( 'p' );

      if ( $count === 1 ) {

        out_text( 'This product has affiliate links to vendors if you would like to buy. ' );

      }
      else {

        out_text( 'These products have affiliate links to vendors if you would like to buy. ' );

      }

      out_text( 'Clicking through on these affiliate links (in green) is a good way to support the channel at no cost to you.' );

    tag_shut( 'p' );

    tag_open( 'p' );

      out_text( 'Please be aware:' );

    tag_shut( 'p' );

    tag_open( 'ul' );

      tag_open( 'li' );

        out_text( "The links given here won't necessarily have the best price so please do shop around to " );
        out_text( "see if you can find a better deal." );

      tag_shut( 'li' );

      tag_open( 'li' );

        out_text( "Prices are indicative only and can and will go out of date; click-through for the latest " );
        out_text( "price." );

      tag_shut( 'li' );

      tag_open( 'li' );
      
        out_text( "Recent exchange rates are used for currency conversions, not the rates that were applicable " );
        out_text( "at the time of record." );

      tag_shut( 'li' );

      tag_open( 'li' );

        out_text( "Shipping costs and sales tax are (usually) not included in the prices listed here." );

      tag_shut( 'li' );

      tag_open( 'li' );
      
        out_text( "Sometimes I can't find the exact product and in those circumstances a substitute product " );
        out_text( "might be suggested." );

      tag_shut( 'li' );

      tag_open( 'li' );

        out_text( "Sometimes a newer model has been released since I purchased the model I have, so keep " );
        out_text( "your eye out for newer models." );

      tag_shut( 'li' );

      tag_open( 'li' );

        out_text( "Sometimes after you click through on an affiliate link you need to make further choices " );
        out_text( "for the type of product you actually want to buy; sometimes it's different colors or socket " );
        out_text( "types, other times it's completely different products, so keep an eye out for that and make " );
        out_text( "sure you understand what you've ordered before you click buy. I have made an effort to " );
        out_text( "indicate when you need to make specific option choices on listings." );

      tag_shut( 'li' );

    tag_shut( 'ul' );

    tag_open( 'p' );

      if ( $count === 1 ) {

        out_text( "You can also get a list of all of my equipment listed by " );


      }
      else {

        out_text( "You can also get this equipment listed by " );

      }

      tag_text(
        'a',
        'category',
        [
          'href' => url_base() . '/category.php',
          'class' => 'internal',
          'rel' => 'follow',
          'title' => TITLE_LINK_CATEGORY,
        ]
      );

      out_text( ' or by ' );

      tag_text(
        'a',
        'manufacturer',
        [
          'href' => url_base() . '/manufacturer.php',
          'class' => 'internal',
          'rel' => 'follow',
          'title' => TITLE_LINK_MANUFACTURER,
        ]
      );

    tag_shut( 'p' );

    tag_open( 'p' );

      out_text( 'If you have thoughts or questions please feel free to ' );

      tag_text(
        'a',
        'let me know',
        [
          'href' => url_base() . '/contact.php',
          'class' => 'internal',
          'rel' => 'follow',
          'title' => TITLE_CONTACT,
        ]
      );


      out_text( '.' );

    tag_shut( 'p' );

    tag_open( 'p' );

      out_text( "Let's go shopping!" );

    tag_shut( 'p' );

  tag_shut( 'section' );

}