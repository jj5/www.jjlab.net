<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_equipment_main();

    default :

      default_redirect( url_base() . '/equipment.php' );

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

  $count = number_format( count( $equipment_list ) );

  render_head( 'Equipment' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Equipment' );

        tag_text(
          'p',
          "Here is a list of $count products I use which may appear in my videos.",
        );

        tag_text( 'p', 'Click through on the green affiliate links to buy!' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      tag_text( 'h2', 'Check Out My Tools and Equipment Detailed on This Page', [ 'id' => 'intro' ] );

      tag_open( 'p' );

        out_text( 'These products have affiliate links to vendors if you would like to buy. ' );
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

        out_text( "You can also get this equipment listed by " );

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

    render_equipment( $equipment_list );

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
