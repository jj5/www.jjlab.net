<?php

use Google\Service\Spanner\Scan;

require_once __DIR__ . '/section.php';

function render_coming_soon() {

  http_response_code( 500 );

  render_head( 'Coming Soon' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => url_base( $use_cdn = true ) . '/img/logo.png' ] );

        tag_text( 'h1', 'Coming Soon', [ 'class' => 'title' ] );

        tag_text( 'p', "The page you have requested isn't ready yet, but I'm working on it!", [ 'class' => 'description' ] );

      tag_shut( 'section' );

    tag_shut( 'header' );

  render_foot();

}

function render_head( $heading ) {

  static $nav_link = [
    [
      'href' => '/',
      'text' => 'Home',
      'title' => TITLE_NAV_HOME,
    ],
    [
      'href' => '/channel.php/@InTheLabWithJayJay',
      'text' => 'Main Channel',
      'title' => TITLE_NAV_MAIN,
    ],
    /*
    [
      'href' => '/feature.php/maxitronix',
      'text' => 'Maxitronix Kits',
      'title' => TITLE_NAV_MAXITRONIX,
    ],
    */
    [
      'href' => '/sponsor.php',
      'text' => 'Sponsors',
      'title' => TITLE_NAV_SPONSORS,
    ],
    // 2024-06-16 jj5 - OLD: this is mostly just taking up space...
    /*
    [
      'href' => '/affiliate.php',
      'text' => 'Affiliates',
      'title' => TITLE_NAV_AFFILIATES,
    ],
    */
    [
      'href' => '/equipment.php',
      'text' => 'Equipment',
      'title' => TITLE_NAV_EQUIPMENT,
    ],
    [
      'href' => '/about.php',
      'text' => 'About',
      'title' => TITLE_NAV_ABOUT,
    ],
    [
      'href' => '/support.php',
      'text' => 'Support The Show!',
      'title' => TITLE_NAV_SUPPORT,
    ],
    [
      'href' => '/debug.php',
      'text' => 'Debug',
      'title' => "John's debug thing",
      'debug' => true,
    ],
  ];

  doc_init();

  $heading_html = henc( $heading );

  tag_open(
    'html',
    [ 'xmlns' => 'http://www.w3.org/1999/xhtml', 'lang' => 'en', 'xml:lang' => 'en' ]
  );

    tag_open( 'head' );

      $title_html = "In The Lab With Jay Jay &mdash; $heading_html";
      $title_text = html_entity_decode( $title_html );

      tag_text( 'title', $title_text );

      $script_filename = $_SERVER[ 'SCRIPT_FILENAME' ] ?? null;

      if ( $script_filename && file_exists( $script_filename ) ) {

        $last_modified = filemtime( $script_filename );

        assert( date_default_timezone_get() === 'Australia/Sydney' );

        $date = date( 'D d M Y H:i:s', $last_modified ) . ' AEDT';

        tag_bare( 'meta', [ 'name' => 'date', 'content' => $date ] );

      }

      $description = 'In The Lab With Jay Jay is the video blog of John Elliot V';

      tag_bare( 'meta', [ 'name' => 'author',       'content' => 'John Elliot V' ] );

      tag_bare(
        'meta',
        [
          'name' => 'keywords',
          'content' => 'electronics videos, electronics lab, electronics kits, electronics experiments, video blog',
        ]
      );

      tag_bare( 'meta', [ 'name' => 'description',  'content' => $description ] );

      tag_bare( 'meta', [ 'name' => 'viewport',     'content' => 'width=device-width, initial-scale=1.0, minimal-ui' ] );

      if ( isset( $_GET[ 'sort' ] ) || isset( $_GET[ 'currency' ] ) ) {

        tag_bare( 'meta', [ 'name' => 'robots', 'content' => 'noindex, nofollow' ] );

      }
      else {

        tag_bare( 'meta', [ 'name' => 'robots', 'content' => 'index, follow' ] );

      }

      tag_bare( 'meta', [ 'property' => 'og:title',       'content' => $title_text ] );
      tag_bare( 'meta', [ 'property' => 'og:description', 'content' => $description ] );
      tag_bare( 'meta', [ 'property' => 'og:image',       'content' => LOGO_URL ] );
      tag_bare( 'meta', [ 'property' => 'og:url',         'content' => get_full_url() ] );
      tag_bare( 'meta', [ 'property' => 'og:type',        'content' => 'website' ] );

      tag_bare( 'meta', [ 'name' => 'twitter:card',         'content' => 'summary' ] );
      tag_bare( 'meta', [ 'name' => 'twitter:title',        'content' => $title_text ] );
      tag_bare( 'meta', [ 'name' => 'twitter:description',  'content' => $description ] );
      tag_bare( 'meta', [ 'name' => 'twitter:image',        'content' => LOGO_URL ] );

      tag_bare( 'link', [ 'rel' => 'icon', 'href' => LOGO_URL ] );

      tag_bare( 'link', [ 'rel' => 'canonical', 'href' => mud_get_full_request_url() ] );

      render_rss_link();

      // 2024-01-24 jj5 - Roboto font...
      //
      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://fonts.googleapis.com/css?family=Roboto' ] );
      //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic' ] );
      //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap' ] );

      // 2024-01-24 jj5 - CSS reset...
      //
      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css' ] );

      $version = get_resource_version();

      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => "https://d27cckvuinr11o.cloudfront.net/global/table.css?v=$version" ] );
      //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://www.staticmagic.net/global/table.css?v=2024-01-12-123831' ] );

      // 2024-01-24 jj5 - Milligram CSS...
      //
      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css' ] );

      //$hash = md5_file( __DIR__ . '/../../../../../web/root/in-the-lab/res/style/main.css' );

      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => url_base( $use_cdn = true ) . "/res/style/main.css?v=$version" ] );

      tag_bare(
        'link',
        [
          'rel' => 'stylesheet',
          'href' => url_base( $use_cdn = true ) . '/res/style/milligram/print.css',
          'media' => 'print',
        ]
      );

      tag_open( 'script' );

        if ( is_dev() ) {

          out_text( 'var DEBUG = true;' );

        }
        else {

          out_text( 'var DEBUG = false;' );

        }

      tag_shut( 'script' );

      tag_bare( 'script', [ 'src' => "https://d27cckvuinr11o.cloudfront.net/global/default.js?v=$version" ] );
      //tag_bare( 'script', [ 'src' => 'https://www.staticmagic.net/global/default.js?v=2024-01-12-123831' ] );

      //$hash = md5_file( __DIR__ . '/../../../../../web/root/in-the-lab/res/script/common.js' );

      tag_bare( 'script', [ 'src' => url_base( $use_cdn = true ) . "/res/script/common.js?v=$version" ] );

      $img_dir = realpath( __DIR__ . '/../../../../../web/root/in-the-lab/img' );

      //foreach ( scandir( $img_dir ) as $filename ) {
      foreach ([
        'banner-base.jpg',
        'banner-0640.jpg',
        'banner.jpg',
        'logo.png',
        'rss/rss-40674_50.png',
        //'itl-logo.svg',
        //'JohnElliotV-100.jpg',
        //'JohnElliotV-500-2.jpg',
        //'JohnElliotV-500-2.xcf',
        //'JohnElliotV-500.jpg',
        //'EgonStetmann_SC2-WoL_Story1.webp',
      ] as $filename ) {

        $ext = pathinfo( $filename, PATHINFO_EXTENSION );

        if ( ! in_array( $ext, [ 'jpg', 'jpeg', 'webp', 'png' ] ) ) { continue; }

        tag_bare(
          'link',
          [
            'rel' => 'preload',
            'href' => url_base( $use_cdn = true ) . '/img/' . $filename,
            'as' => 'image',
          ]
        );

      }

    tag_shut( 'head' );

    tag_open( 'body' );

      tag_open( 'main', [ 'class' => 'wrapper' ] );

        /*
        tag_open( 'div', [ 'style' => 'position:fixed;z-index:100;top:1px;right:1px;' ] );

          render_rss_anchor();

        tag_shut( 'div' );
        */

        tag_open( 'nav', [ 'class' => 'navigation' ] );

          tag_open( 'div', [ 'class' => 'container' ] );

            tag_open(
              'a',
              [
                'href' => url_base() . '/',
                'class' => 'navigation-title',
                'title' => TITLE_LOGO,
              ]
            );

              tag_bare( 'img', [ 'src' => url_base( $use_cdn = true ) . '/img/logo.png' ] );

              tag_text( 'header', 'In The Lab With Jay Jay', [ 'class' => 'title' ] );

            tag_shut( 'a' );

            tag_open( 'ul', [ 'class' => 'navigation-list' ] );

              tag_open( 'li', [ 'class' => 'navigation-item' ] );

                tag_open(
                  'button',
                  [
                    'class' => 'hamburger',
                    'onclick' => 'handle_hamburger_click( event, this )',
                    'title' => TITLE_NAV_HAMBURGER,
                  ]
                );

                  tag_bare( 'span', [ 'class' => 'bar' ] );
                  tag_bare( 'span', [ 'class' => 'bar' ] );
                  tag_bare( 'span', [ 'class' => 'bar' ] );

                tag_shut( 'button' );

                tag_open( 'div', [ 'id' => 'popover-grid', 'class' => 'popover' ] );

                  tag_open( 'ul', [ 'class' => 'popover-list' ] );

                    foreach ( $nav_link as $link ) {

                      $is_debug = $link[ 'debug' ] ?? false;

                      if ( $is_debug && ! is_dev() ) { continue; }

                      tag_open( 'li', [ 'class' => 'popover-item' ] );

                        tag_text(
                          'a',
                          $link[ 'text' ],
                          [
                            'href' => url_base() . $link[ 'href' ],
                            'class' => 'internal popover-link',
                            'title' => $link[ 'title' ],
                          ]
                        );

                      tag_shut( 'li' );

                    }

                    tag_open( 'li', [ 'class' => 'popover-item' ] );

                      render_rss_anchor( [ 'class' => 'internal popover-link' ] );

                    tag_shut( 'li' );

                  tag_shut( 'ul' );

                tag_shut( 'div' );

              tag_shut( 'li' );

            tag_shut( 'ul' );

            tag_open( 'div', [ 'class' => 'menu-list' ] );

              foreach ( $nav_link as $index => $link ) {

                $is_debug = $link[ 'debug' ] ?? false;

                if ( $is_debug && ! is_dev() ) { continue; }

                if ( $index !== 0 ) { out_text( ' | ' ); }

                tag_text(
                  'a',
                  $link[ 'text' ],
                  [
                    'href' => url_base() . $link[ 'href' ],
                    'class' => 'internal',
                    'title' => $link[ 'title' ],
                  ]
                );

              }

              render_rss_anchor( [ 'class' => 'internal' ] );

            tag_shut( 'div' );

          tag_shut( 'div' );

        tag_shut( 'nav' );

        tag_open( 'header', [ 'id' => 'banner' ] );

          tag_bare( 'img', [ 'class' => 'rc-base', 'src' => url_base( $use_cdn = true ) . '/img/banner-base.jpg' ] );

          tag_bare( 'img', [ 'class' => 'rc-0320', 'src' => url_base( $use_cdn = true ) . '/img/banner-base.jpg' ] );

          tag_bare( 'img', [ 'class' => 'rc-0640', 'src' => url_base( $use_cdn = true ) . '/img/banner-0640.jpg' ] );

          tag_bare( 'img', [ 'class' => 'rc-1280', 'src' => url_base( $use_cdn = true ) . '/img/banner.jpg' ] );

          tag_bare( 'img', [ 'class' => 'rc-1920', 'src' => url_base( $use_cdn = true ) . '/img/banner.jpg' ] );

        tag_shut( 'header' );

}

function render_foot() {

      tag_shut( 'main' );

      tag_open( 'footer' );

        tag_html( 'div', '&copy; Copyright ' . date( 'Y' ) . ' John Elliot V. All rights reserved.' );

      tag_shut( 'footer' );

      tag_open( 'script' );

        if ( is_john() ) {

?>

window.IS_JOHN = true;

<?php

        }
        else {

?>

window.IS_JOHN = false;

<?php

        }

      tag_shut( 'script' );

      if ( strpos( $_SERVER[ 'HTTP_USER_AGENT' ] ?? '', 'QtWebEngine' ) !== false ) {

        tag_open( 'script' );

?>

// 2024-06-29 jj5 - NOTE: this is to fix a problem with the page not scrolling to the right place when opened in
// Akregator. It's a hack, but it works...

function scroll_hack() {

  try {

    var limit = 250;

    window.SCROLL_HACK_COUNTER++;

    var fragment = window.location.hash;

    if ( fragment ) {

      var id = fragment.substring( 1 ); 

      var element = document.getElementById( id );

      if ( element ) {

        element.scrollIntoView();

        clearInterval( window.SCROLL_HACK );

        //alert( 'Scrolled into view after attempt ' + window.SCROLL_HACK_COUNTER + '...' );

        return true;

      }
    }

    if ( window.SCROLL_HACK_COUNTER > limit ) {

      return clearInterval( window.SCROLL_HACK );

    }
  }
  catch ( ex ) {

    if ( window.SCROLL_HACK_COUNTER > limit ) {

      return clearInterval( window.SCROLL_HACK );

    }
  }
}

window.SCROLL_HACK_COUNTER = 0;
window.SCROLL_HACK = setInterval( scroll_hack, 50 );

<?php

        tag_shut( 'script' );

      }

    tag_shut( 'body' );

  tag_shut( 'html' );

}

function get_resource_version() {

  return JJLAB_CODE . '-' . JJLAB_VERSION_MAJOR . '.' . JJLAB_VERSION_MINOR . '.' . JJLAB_VERSION_PATCH;

}

function render_rss_link() {

  get_rss_link( $title, $url );

  tag_bare(
    'link',
    [
      'rel'   => 'alternate',
      'type'  => 'application/rss+xml',
      'title' => $title,  // "In The Lab With Jay Jay » Feed"
      'href'  => $url,    // 'https://www.inthelabwithjayjay.com/in-the-lab/feed.php'
    ]
  );

}

function render_rss_anchor( $attrs = [] ) {

  // 2024-07-03 jj5 - NOTE: I'm not going to keep the RSS links as context affinitive, instead the RSS link in the header
  // will always link to the main feed...

  $title = 'Click here to subscribe to the full RSS feed which includes all videos.';
  $url = url_base() . '/feed.php';

  // 2024-07-03 jj5 - OLD: this was context affinitive...
  //get_rss_link( $title, $url );

  tag_open(
    'a',
    $attrs + [
      'href' => $url,
      'title' => $title,
    ]
  );

    //out_text( 'RSS' );

    tag_bare(
      'img',
      [
        'src' => url_base( $use_cdn = true ) . '/img/rss/rss-40674_50.png',
        'style' => 'display:inline-block;width:50px;height:auto;vertical-align:top;margin-top:0px;',
      ]
    );

  tag_shut( 'a' );

}

function get_rss_link( &$feed_title, &$feed_url ) {

  $script_name = basename( $_SERVER[ 'SCRIPT_NAME' ] );
  $path_info = $_SERVER[ 'PATH_INFO' ] ?? '';
  $path_parts = explode( '/', $path_info );
  $slug = $path_parts[ 1 ] ?? '';

  switch ( $script_name ) {

    case 'channel.php' :

      $channel = app_stash()->get_channel( $slug );

      if ( ! $channel->is_null() ) {

        return $channel->get_rss_info( $feed_title, $feed_url );

      }

      break;

    case 'show-type.php' :

      $show_type = app_stash()->get_show_type( $slug );

      if ( ! $show_type->is_null() ) {

        return $show_type->get_rss_info( $feed_title, $feed_url );

      }

      break;

    case 'feature.php' :

      $feature = app_stash()->get_feature( $slug );

      if ( ! $feature->is_null() ) {

        $channel = $feature->get_channel();
        $show_type = $feature->get_show_type();

        $feed_title = $channel->get_slug() . ' » ' . $show_type->get_name(). ' » ' . $feature->get_name() . ' » Feed';
        $feed_url = url_base() . '/feed.php/feature/' . $slug;

        return true;

      }

      break;

  }

  $feed_title = 'In The Lab With Jay Jay » Feed';
  $feed_url = url_base() . '/feed.php';

  return true;

}

function list_maxitronix_kits() {
?>
<ul>
<?php
  foreach ( get_list( MaxitronixKit::class ) as $kit ) {
    $kit_name = $kit->get_maxitronix_kit_name()->to_string();
    $kit_html = henc( $kit_name );
?>
  <li><a
    href="<?= url_base() ?>/show-type.php/maxitronix-<?= $kit_html ?>"
    class="internal"
    title="<?= MaxitronixKit::get_html_title( $kit_name ) ?>"
  >Maxitronix <?= $kit_html ?></a></li>
<?php
  }
?>
</ul>
<?php
}

function sort_equipment_list( &$equipment_list ) {

  $sort = $_GET[ 'sort' ] ?? 'expensive-first';

  if ( $sort === 'cheap-first' ) {

    Equipment::sort_cheap_first( $equipment_list );

  }
  elseif ( $sort === 'expensive-first' ) {

    Equipment::sort_expensive_first( $equipment_list );

  }
  elseif ( $sort === 'new-first' ) {

    Equipment::sort_new_first( $equipment_list );

  }
  elseif ( $sort === 'old-first' ) {

    Equipment::sort_old_first( $equipment_list );

  }
  elseif ( $sort === 'straight' ) {

    // 2024-01-15 jj5 - just leave the array in the order it's in...

  }
  elseif ( $sort === 'reverse' ) {

    $equipment_list = array_reverse( $equipment_list );

  }
  elseif ( $sort === 'random' ) {

    shuffle( $equipment_list );

  }
  elseif ( $sort === 'stable-random' ) {

    // 2024-01-13 jj5 - the default sort (was) random by hour

    // 2024-01-13 jj5 - we generate a new seed every hour...
    //
    $seed = intval( date( 'YmdH' ) );

    mt_srand( $seed );

    shuffle( $equipment_list );

  }
}

function render_equipment( $equipment_list ) {

  sort_equipment_list( $equipment_list );

  if ( get_client_width() >= 1920 ) {

    render_equipment_table( $equipment_list );

  }
  else {

    render_equipment_list( $equipment_list );

  }
}

function render_equipment_text( $equipment_list ) {

  sort_equipment_list( $equipment_list );

  $row_number = 0;

  tag_open( 'textarea', [ 'style' => 'height:400px;' ] );

  out_text("
If you like my stuff please consider supporting me on Patreon: https://www.patreon.com/JohnElliotV

Super big thank you to my subscribers and my Patreon supporters! ❤️

The show notes for this video are here: https://www.jjlab.net/in-the-lab/

If you enjoyed this video don't forget to hit subscribe so you don't miss the next one. If you have any questions or suggestions please do hit me up in the comments section.

Following is a list of products I use which may appear in my videos. Clicking through on these links before purchasing from Amazon, eBay, or AliExpress is a great way to support the channel at no cost to you. Thanks!

");

  foreach ( $equipment_list as $equipment ) {

    $row_number++;

    //out_text( '* ' );
    out_text( $equipment->get_short_link() );
    //out_text( ' - ' );
    out_text( ' ' );
    out_text( $equipment->get_equipment_name() );
    out_text( "\n" );


  }

  out_text("
If you have any questions about any of the products I use please do ask in the comments section. I'm always happy to help.

Thank you! Don't forget to hit subscribe! :)");

  tag_shut( 'textarea' );

}

function render_blog_template( $equipment_list ) {

  sort_equipment_list( $equipment_list );

  $row_number = 0;

  tag_open( 'textarea', [ 'style' => 'height:400px;' ] );

  out_text("
This post is part of my video blog: <a href=\"https://www.inthelabwithjayjay.com/in-the-lab/\">In The Lab With Jay Jay</a>.

<iframe src=\"https://www.youtube.com/embed/to9cunh46bw\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"true\" width=\"560\" height=\"315\"></iframe>

You can support this channel on Patreon: <a href=\"https://www.patreon.com/JohnElliotV\">patreon.com/JohnElliotV</a>

In this video I 

Following is a list of products I use which may appear in my videos. Clicking through on these links before purchasing from Amazon, eBay, or AliExpress is a great way to support the channel at no cost to you. Thanks!

<table class='table'>
<tbody>
");

  foreach ( $equipment_list as $equipment ) {

    $row_number++;

    $thumb = henc( $equipment->get_equipment_icon()->get_public_url() );
    $product = henc( $equipment->get_equipment_name() );
    $link = henc( $equipment->get_short_link() );
    $notes = henc( $equipment->get_sixsigma_url() );

    out_text("<tr>
<td>
<a href=\"$link\" title=\"Click here for prices and more info about the $product.\" target=\"_blank\">
<span style=\"font-size:2rem;\">$product</span>
<img src=\"$thumb\" alt=\"\" style=\"max-height:400px\"></a>");

    if ( $notes ) {

      out_text("
<a href=\"$notes\" title=\"Click here for my notes about the $product.\" target=\"_blank\">notes</a>");

    }

    out_text("
</td>
</tr>
");


  }

  out_text("</tbody>
</table>

Let's go shopping!");

  tag_shut( 'textarea' );

}

function render_equipment_table( $equipment_list ) {
?>

<div class="equipment equipment-table">
<?php render_equipment_options(); ?>
<table id='equipment' class="main">
  <tbody>
<?php

  $row_number = 0;

  foreach ( $equipment_list as $equipment ) {

    $row_number++;

    $affiliate_link_list = $equipment->get_affiliate_link_list();
    $purchase_list = $equipment->get_purchase_list();

    $count = count( $affiliate_link_list );
    $other_adjust = count( $purchase_list );

    if ( $purchase_list ) {

      $adjust = 4;
      $count += count( $purchase_list );

    }
    else {

      $adjust = 3;

    }

    $count = $count + $adjust;

    if ( count( $affiliate_link_list ) ) :

      $img_url = henc( $equipment->get_equipment_icon()->get_auto_url() );
      $equipment_text_html = henc( $equipment->get_equipment_name() );

      $id_html = $equipment->get_equipment_id();

      $short_link_html = henc( $equipment->get_short_link() );

?>
    <tr class="spacer row-<?= $row_number ?>">
<?php /*
      <td style="width:225px !important;"></td>
      <td colspan="5"></td>
      <td></td> */ ?>
      <td colspan="7"></td>
    </tr>
    <tr>

      <td class="equipment img" rowspan="<?= $count ?>">
        <a
          href="<?= url_base() ?>/equipment.php#<?= $id_html ?>"
          class="internal equipment-link"
          title="<?= henc( TITLE_LINK_ITEM ) ?>"
        >
          <div><?= $equipment_text_html ?></div>
          <div><img src="<?= $img_url ?>"></div></a>
        <div><?= $equipment->get_first_purchase_date()->to_html() ?></div>
        <div><a
          href="<?= $short_link_html ?>"
          class="internal"
          title="<?= henc( TITLE_LINK_SHORT ) ?>"
        ><?= $short_link_html ?></a></div>
<?php
      if ( is_dev() ) :
        ?><hr><?php

        foreach ( get_list( Affiliate::class ) as $affiliate ) :

          $href_html = henc( $affiliate->get_search_url( $equipment->get_equipment_name()->to_string() ) );
          $text_html = $affiliate->get_affiliate_name()->to_html();
?>
            <div><a
              href="<?= $href_html ?>"
              class="external"
              title="<?= henc( TITLE_SEARCH_AFFILIATE ) ?>"
              target='search'
            ><?= $text_html ?></a></div>
<?php

        endforeach;
      endif;
?>
      </td>
      <td colspan="7" class="equipment" style="height:2rem">
        <h2 id="<?= $id_html ?>"><?= $equipment_text_html ?></h2>
<?php $link_list = $equipment->get_category_list(); ?>
<?php $manufacturer = $equipment->get_equipment_info()->get_manufacturer_name(); ?>
<?php if ( ! $manufacturer->is_null() ) { array_unshift( $link_list, $manufacturer ); } ?>
<?php $link_number = 0; ?>
<?php foreach ( $link_list as $link ) : ?>
<?php   $link_number++; ?>
<?php   if ( $link_number !== 1 ) { echo ' | '; } ?>
<?php   if ( is_a( $link, Category::class ) ) : ?>
          <a
            href="<?= url_base() ?>/category.php/<?= henc( $link->get_category_id() ) ?>"
            class="internal"
            title="<?= henc( TITLE_LINK_CATEGORY_SELECTION ) ?>"
          ><?= $link->to_html() ?></a>
<?php   else : ?>
          <a
            href="<?= url_base() ?>/manufacturer.php/<?= henc( $link->get_manufacturer_id() ) ?>"
            class="internal"
            title="<?= henc( TITLE_LINK_MANUFACTURER_SELECTION ) ?>"
          ><?= $link->to_html() ?></a>
<?php   endif; ?>
<?php endforeach; ?>
      </td>
    </tr>
<?php
    endif;

?>
    <tr style="height:2rem">
      <th style="width:5% !important;">Affiliate</th>
      <th colspan="2" style="width:10% !important;">Unit Price</th>
      <th>Affiliate Link (Click-through for the latest price and to buy!)</th>
      <th style="width:20% !important;">Option(s)</th>
      <th style="width:4rem !important;">Notes</th>
    </tr>
<?php

      // 2024-01-17 jj5 - always sort these from cheap to expensive...
      //
      usort(
        $affiliate_link_list,
        function ( $a, $b ) { return $a->get_sort_value() - $b->get_sort_value(); }
      );

      $affiliate_number = 0;

      foreach ( $affiliate_link_list as $affiliate_link ) {

        $affiliate_number++;

        $affiliate = $affiliate_link->get_affiliate();

        echo "<tr style='height:2rem'>\n";

        $href_html = $affiliate->get_affiliate_url()->to_html();
        $text_html = $affiliate->get_affiliate_name()->to_nbsp();
        //echo "<td><a href='$href_html'>$text_html</a></td>";
        echo "<td class='affiliate'>$text_html:</td>";

        $equipment_date = $equipment->get_equipment_date();
        $title_html = henc( "Price current as of $equipment_date" );

        $text_html = $affiliate_link->get_item_price()->to_html();
        echo "<td colspan='2' class='price' title='$title_html'>$text_html</td>";

        /*
        $text_html = $affiliate_link->get_item_shipping()->to_html();
        echo "<td class='price shipping'>$text_html</td>";

        $text_html = $affiliate_link->get_item_total()->to_html();
        echo "<td class='price total'>$text_html</td>";
        */

        echo "<td class='affiliate_link' title='Click through for the latest price from this affiliate and to buy!'>";
        echo $affiliate_link->to_html();
        echo "</td>";

        if ( ! $affiliate_link->get_item_options()->is_null() ) {

          $item_options_html = $affiliate_link->get_item_options()->to_html();

          echo "<td class='item_options'>$item_options_html</td>";

        }
        else {

          echo "<td></td>";

        }

        if ( $affiliate_number === 1 ) {

          $notes_url = $equipment->get_sixsigma_url()->to_html();

          $notes_adjust = $count - $adjust - $other_adjust;

          if ( $notes_url ) :
    ?>
            <td colspan="1" rowspan="<?= $notes_adjust ?>" class="notes" style="vertical-align:top !important; text-align: center;"><a
              href="<?= $notes_url ?>"
              class="internal"
              title="<?= henc( TITLE_LINK_SIXSIGMA ) ?>"
            >notes</a></td>
<?php
          else :
    ?>
            <td colspan="1" rowspan="<?= $notes_adjust ?>" class="notes"></td>
<?php
          endif;

        }

        echo "</tr>\n";

      }

?>
    <tr>
      <td colspan="7">
<?php

      $warning_list = $equipment->get_warning_list();

      if ( $warning_list ) {
?>
        <p>Warning:</p>
        <ul>
<?php

        foreach ( $warning_list as $warning ) {

          $text_html = $warning->to_html();

?>
          <li class="warning"><?= $text_html ?></li>
<?php


        }

?>
        </ul>
<?php

      }

      $see_also_list = $equipment->get_see_also_list();

      if ( $see_also_list ) {
?>
        <p>See also:</p>
        <ul>
<?php

        foreach ( $see_also_list as $see_also ) {

          $text_html = $see_also->to_html();
          $id_html = str_replace( ' ', '-', $text_html );
?>
          <li><a
            href="#<?= $id_html ?>"
            class="internal"
            title="<?= henc( TITLE_LINK_SEE_ALSO ) ?>"
          ><?= $text_html ?></a></li>
<?php


        }

?>
        </ul>
<?php

      }

      $web_link_list = $equipment->get_web_link_list();

      // 2024-01-18 jj5 - I'm gonna leave this out for now, less is more.
      //$web_link_list[] = $equipment->get_search_link();

      if ( $web_link_list ) {
?>
        <p>Links:</p>
        <ul>
<?php

        foreach ( $web_link_list as $link ) {

          $link_html = $link->to_html();

 ?>
          <li><?= $link_html ?></li>
<?php

        }

?>
        </ul>
<?php

      }

      $link_list = $equipment->get_equipment_info()->get_manufacturer_link_list();

      if ( $link_list ) {
?>
        <p>Manufacturer links:</p>
        <ul>
<?php

        foreach ( $link_list as $link ) {

          $link_html = $link->to_html();

 ?>
          <li><?= $link_html ?></li>
<?php

        }

?>
        </ul>
<?php

      }

?>
</td>
    </tr>
<?php

    if ( $purchase_list ) :
?>
    <tr style="height:2rem">
      <th>Vendor</th>
      <th>Unit Price</th>
      <th title="This includes shipping costs and tax less discounts">Ancillary Charges</th>
      <th>Purchase History (The specific things I purchased)</th>
      <th>Option(s)</th>
      <th>Notes</th>
    </tr>
<?php

      foreach ( $purchase_list as $purchase ) {

        $vendor_html = henc( $purchase->get_vendor() );

        $quantity = $purchase->get_order_quantity();
        $quantity_html = $quantity->to_html();

        $price = $purchase->get_order_price();
        $price_html = $price->to_html();

        $subtotal = $price->multiply( $quantity->get_value() );
        $subtotal_html = $subtotal->to_html();

        $date = $purchase->get_order_date();
        $date_html = $date->to_html();

        $shipping = $purchase->get_order_shipping();
        $shipping_html = $shipping->to_html();

        $tax = $purchase->get_order_tax();
        $tax_html = $tax->to_html();

        $discount = $purchase->get_order_discount();
        $discount_html = $discount->to_html();

        $ancillary_charges = null;

        if ( ! $shipping->is_null() ) {

          $ancillary_charges = $shipping->add( $tax )->subtract( $discount );

        }
        elseif ( ! $tax->is_null() ) {

          $ancillary_charges = $tax->subtract( $discount );

        }
        elseif ( ! $discount->is_null() ) {

          $ancillary_charges = $discount->invert();

        }

        $ancillary_charges_html = $ancillary_charges ? $ancillary_charges->to_html() : '';

        $total = $subtotal->add( $ancillary_charges );
        $total_html = $total->to_html();

        $number = $quantity->get_value();

        $number_html = henc( NUMBER_MAP[ $number ] ?? $number );

        $options_html = $purchase->get_order_options()->to_html();

        $href = '#' . $purchase->get_parent()->get_equipment_id();

        $vendor_url = $purchase->get_vendor_url();

        if ( ! $vendor_url->is_null() ) { $href = $vendor_url->to_html(); }

        $each = $number === 1 ? '' : 'each';
        $plus = $shipping->get_value() > 0 ? 'and' : 'plus';

        $order_url_html = $purchase->get_order_url()->to_html();
        $order_id_html = $purchase->get_order_id()->to_html();

        // 2024-01-27 jj5 - TODO: review this tool tip, it's not very good

        $order_item_name_html = $purchase->get_order_item_name()->to_html();

?>
        <tr style="height:2rem">
          <td class="vendor"><?= $vendor_html ?>:</td>
          <td class="subtotal price"><?= $subtotal_html ?></td>
          <td class="ancillary price"><?= $ancillary_charges_html ?></td>
          <td>I purchased
            <a
              href="<?= $href ?>"
              class="external"
              title="<?= $order_item_name_html ?>"
              target="_blank"
            ><?= $number_html ?> of these</a>
            on <?= $date_html ?> for
            <?= $price_html ?> <?= $each ?>
<?php if ( $shipping->get_value() > 0 ) : ?>
            plus shipping of <?= $shipping_html ?>
<?php else : ?>
            with free shipping
<?php endif; ?>
<?php if ( $tax->get_value() > 0 ) : ?>
            <?= $plus ?> tax of <?= $tax_html ?>
<?php endif; ?>
<?php if ( $discount->get_value() > 0 ) : ?>
            and a discount of <?= $discount_html ?>
<?php endif; ?>
            for a total of <?= $total_html ?>.
<?php if ( is_dev() ) : ?>
            Order: <a
              href="<?= $order_url_html ?>"
              class="external"
              title="<?= henc( TITLE_LINK_ORDER ) ?>"
              target='_blank'
            ><?= $order_id_html ?></a>
<?php endif; ?>
          </td>
          <td><?= $options_html ?></td>
          <td></td>
        </tr>
<?php

      }

    endif;

  }
?>
<?php
?>
  </tbody>
</table>
</div>
<?php

}

function render_equipment_list( $equipment_list ) {
?>

<div class="equipment equipment-list">
<?php render_equipment_options(); ?>

<?php

  $row_number = 0;

  foreach ( $equipment_list as $equipment ) {

    $row_number++;

    $affiliate_link_list = $equipment->get_affiliate_link_list();

    $img_url = $equipment->get_equipment_icon()->get_auto_url();
    $equipment_text = $equipment->get_equipment_name();

    $id = $equipment->get_equipment_id();

    $short_link = $equipment->get_short_link();

    tag_open( 'section', [ 'id' => $id, 'class' => 'container' ] );

      //tag_bare( 'br', [ 'style' => 'clear:both' ] );

      tag_open( 'h2', [ 'class' => 'equipment clearfix' ] );

        out_text( $equipment_text );

      tag_shut( 'h2' );

      tag_bare( 'img', [ 'src' => $img_url, 'alt' => $equipment_text ] );

      tag_open( 'dl' );

        tag_text( 'dt', 'Short link' );

        tag_open( 'dd' );

          $short_link_url = $short_link;

          if ( is_dev() ) {

            $short_link_url = "#$id";

          }

          tag_open(
            'a',
            [
              'href' => $short_link_url,
              'class' => 'internal',
              'title' => TITLE_LINK_SHORT,
            ]
          );

            out_text( $short_link );

          tag_shut( 'a' );

        tag_shut( 'dd' );

        $equipment->get_first_purchase_date()->render_definition();

        $link_list = $equipment->get_category_list();
        $manufacturer = $equipment->get_equipment_info()->get_manufacturer_name();

        if ( ! $manufacturer->is_null() ) { array_unshift( $link_list, $manufacturer ); }

        if ( count( $link_list ) > 1 ) {

          tag_text( 'dt', 'Categories' );

        }
        else {

          tag_text( 'dt', 'Category' );

        }

        tag_open( 'dd' );

          $link_number = 0;

          foreach ( $link_list as $link ) {

            $link_number++;

            if ( $link_number !== 1 ) { out_text( ' | ' ); }

            $link->render();

          }

        tag_shut( 'dd' );

        if ( count( $affiliate_link_list ) ) {

          // 2024-01-17 jj5 - always sort these from cheap to expensive...
          //
          usort(
            $affiliate_link_list,
            function ( $a, $b ) { return $a->get_sort_value() - $b->get_sort_value(); }
          );

          foreach ( $affiliate_link_list as $affiliate_link ) {

            $affiliate = $affiliate_link->get_affiliate();
            $equipment_date = $equipment->get_equipment_date();
            $dt_title = "Price current as of $equipment_date";

            tag_open( 'dt', [ 'title' => $dt_title ] );

              out_text( 'Buy for ' );

              tag_open( 'b' );

                out_text( $affiliate_link->get_item_price()->to_string() );

              tag_shut( 'b' );

              out_text( ' from ' );
              out_text( $affiliate->get_affiliate_name() );

              if ( ! $affiliate_link->get_item_options()->is_null() ) {

                out_text( '; Check option(s): ' );
                out_text( $affiliate_link->get_item_options() );

              }

              out_text( ':' );

            tag_shut( 'dt' );

            tag_open( 'dd' );

              $affiliate_link->render();

            tag_shut( 'dd' );

          }
        }

        $notes_url = $equipment->get_sixsigma_url()->to_string();

        if ( $notes_url ) {

          tag_open( 'dt' );

            out_text( 'Notes' );

          tag_shut( 'dt' );

          tag_open( 'dd' );

            out_text( 'I have ' );

            tag_open(
              'a',
              [
                'href' => $notes_url,
                'class' => 'internal',
                'title' => TITLE_LINK_SIXSIGMA,
              ]
            );

              out_text( 'notes' );

            tag_shut( 'a' );

            out_text( ' about this product on my personal wiki.' );

          tag_shut( 'dd' );

        }

        $warning_list = $equipment->get_warning_list();

        render_list( 'Warning:', $warning_list, 'warning' );

        $see_also_list = $equipment->get_see_also_list();

        render_list( 'See also:', $see_also_list, 'see-also' );

        $web_link_list = $equipment->get_web_link_list();

        render_list( 'Links:', $web_link_list, 'link' );

        $link_list = $equipment->get_equipment_info()->get_manufacturer_link_list();

        render_list( 'Manufacturer links:', $link_list, 'link' );

        $purchase_list = $equipment->get_purchase_list();

        foreach ( $purchase_list as $purchase ) {

          $quantity = $purchase->get_order_quantity();
          $price = $purchase->get_order_price();
          $subtotal = $price->multiply( $quantity->get_value() );
          $date = $purchase->get_order_date();
          $shipping = $purchase->get_order_shipping();
          $tax = $purchase->get_order_tax();
          $discount = $purchase->get_order_discount();
          $ancillary_charges = null;

          if ( ! $shipping->is_null() ) {

            $ancillary_charges = $shipping->add( $tax )->subtract( $discount );

          }
          elseif ( ! $tax->is_null() ) {

            $ancillary_charges = $tax->subtract( $discount );

          }
          elseif ( ! $discount->is_null() ) {

            $ancillary_charges = $discount->invert();

          }

          $total = $subtotal->add( $ancillary_charges );
          $number = $quantity->get_value();
          $number_name = NUMBER_MAP[ $number ] ?? $number;
          $href = '#' . $purchase->get_parent()->get_equipment_id();
          $vendor_url = $purchase->get_vendor_url();

          if ( ! $vendor_url->is_null() ) { $href = $vendor_url->to_html(); }

          $each = $number === 1 ? '' : ' each';
          $plus = $shipping->get_value() > 0 ? 'and' : 'plus';

          $order_url_html = $purchase->get_order_url()->to_html();
          $order_id_html = $purchase->get_order_id()->to_html();

          $order_item_name_html = $purchase->get_order_item_name()->to_html();

          tag_open( 'dt' );

            out_text( 'I purchased ' );

            tag_open(
              'a',
              [
                'href' => $href,
                'class' => 'external',
                'title' => TITLE_LINK_PURCHASED,
                'target' => '_blank',
              ]
            );

              $quantity = $purchase->get_order_quantity()->to_string();

              out_text( $number_name );

              out_text( ' of these' );

            tag_shut( 'a' );

            out_text( ' from ' );

            out_text( $purchase->get_vendor() );

            out_text( ' on ' );

            out_text( $purchase->get_order_date()->to_string() );

            out_text( ' for ' );

            out_text( $purchase->get_order_price()->to_string() );

            out_text( $each );

            out_text( '.' );

          tag_shut( 'dt' );

          tag_open( 'dd' );

          tag_shut( 'dd' );

        }

      tag_shut( 'dl' );

    tag_shut( 'section' );

  }

?>
</div>
<?php

}

function render_list( $label, $list, $class ) {

  if ( ! $list ) { return; }

  tag_text( 'dt', $label );

  tag_open( 'dd' );

    tag_open( 'ul' );

      foreach ( $list as $item  ) {

        tag_open( 'li', [ 'class' => $class ] );

          $item->render();

        tag_shut( 'li' );

      }

    tag_shut( 'ul' );

  tag_shut( 'dd' );

}

function render_equipment_options() {
?>
<div id='options'>
<p>Prices in:
    <a
      href="?<?= get_link( [ 'currency' => 'USD' ] ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_PRICE_USD ) ?>"
      rel="nofollow"
    >USD</a>
  | <a
      href="?<?= get_link( [ 'currency' => 'AUD' ] ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_PRICE_AUD ) ?>"
      rel="nofollow"
    >AUD</a>
  | <a
    href="?<?= get_link_without( 'currency' ) ?>#options"
    class="internal"
    title="<?= henc( TITLE_PRICE_DEFAULT ) ?>"
    rel="nofollow"
  >default</a>

  &mdash;

  Sort:
    <a
      href="?<?= get_link( [ 'sort' => 'cheap-first' ] ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_SORT_CHEAP_FIRST ) ?>"
      rel="nofollow"
    >cheap first</a>
  | <a
      href="?<?= get_link( [ 'sort' => 'expensive-first' ] ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_SORT_EXPENSIVE_FIRST ) ?>"
      rel="nofollow"
    >expensive first</a>
  | <a
      href="?<?= get_link( [ 'sort' => 'new-first' ] ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_SORT_NEW_FIRST ) ?>"
      rel="nofollow"
    >newest first</a>
  | <a
      href="?<?= get_link( [ 'sort' => 'old-first' ] ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_SORT_OLD_FIRST ) ?>"
      rel="nofollow"
    >oldest first</a>
  | <a
      href="?<?= get_link( [ 'sort' => 'random' ] ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_SORT_RANDOM ) ?>"
      rel="nofollow"
    >random</a>
  | <a
      href="?<?= get_link_without( 'sort' ) ?>#options"
      class="internal"
      title="<?= henc( TITLE_SORT_DEFAULT ) ?>"
      rel="nofollow"
    >default</a>
</p>
</div>
<?php
}
