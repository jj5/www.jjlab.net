<?php

require_once __DIR__ . '/section.php';

function render_coming_soon() {

  http_response_code( 500 );

  render_head( 'Coming Soon' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare(
          'img',
          [
            'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version( 'logo.png' )
          ]
        );

        tag_text( 'h1', 'Coming Soon', [ 'class' => 'title' ] );

        tag_text( 'p', "The page you have requested isn't ready yet, but I'm working on it!", [ 'class' => 'description' ] );

      tag_shut( 'section' );

    tag_shut( 'header' );

  render_foot();

}

function render_404() {

  http_response_code( 404 );

  $title = '404 - Page Not Found';

  render_head( $title, [ 'robots' => 'noindex' ] );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare(
          'img',
          [
            'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version( 'logo.png' )
          ]
        );

        tag_text( 'h1', $title, [ 'class' => 'title' ] );

        tag_text( 'p', 'Oops! The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

      tag_text( 'p', 'Try the following:' );

      tag_open( 'ul' );

        tag_text( 'li', 'Check the URL for errors and try again.' );

        tag_open( 'li' );

          out_text( 'Return to the ' );

          render_link_internal( 'homepage', url_base() . '/#heading', TITLE_HOMEPAGE );

          out_text( '.' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'If you believe this is an error, please ' );

          render_link_internal( 'contact us', url_base() . '/contact.php#heading', TITLE_CONTACT );

          out_text( '.' );

        tag_shut( 'li' );

      tag_shut( 'ul' );

      tag_text( 'p', 'Thank you for your understanding.' );

    tag_shut( 'section' );

  render_foot();

}

function render_500( $message = null, $form = null, $issue = null, $exit = null, $ex = null ) {

  http_response_code( 500 );

  // 2024-07-05 jj5 - NOTE: I say "Internal Error" rather than "Internal Server Error" because I don't want the user to
  // misread as "Internal Severe Error" and freak out...
  //
  $title = '500 - Internal Error';

  render_head( $title, [ 'robots' => 'noindex' ] );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare(
          'img',
          [
            'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version( 'logo.png' ),
          ]
        );

        tag_text( 'h1', $title, [ 'class' => 'title' ] );

        tag_text( 'p', "Uh-oh! Something went wrong on our end. We're working to fix it as quickly as possible." );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

      tag_open( 'p' );

        out_text( "Error while processing. This incident has been logged." );

        if ( $issue ) { out_text( " Issue #$issue." ); }

      tag_shut( 'p' );

      tag_text( 'p', 'We apologize for any inconvenience caused and appreciate your patience.' );

      tag_text( 'p', 'In the meantime, you can:' );

      tag_open( 'ul' );

        tag_text( 'li', 'Try refreshing the page.' );

        tag_open( 'li' );

          out_text( 'Return to the ' );

          render_link_internal( 'homepage', url_base() . '/#heading', TITLE_HOMEPAGE );

          out_text( '.' );

        tag_shut( 'li' );

      tag_shut( 'ul' );

      tag_open( 'p' );

        out_text( 'If the problem persists, please ' );

        render_link_internal( 'contact us', url_base() . '/contact.php#heading', TITLE_CONTACT );

        out_text( ' to let us know.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

  render_foot();

}

function render_head( string $heading, array $options = [] ) {

  static $nav_link = [
    [
      'href' => '/#heading',
      'text' => 'Home',
      'title' => TITLE_NAV_HOME,
    ],
    [
      'href' => '/channel.php/@InTheLabWithJayJay#heading',
      'text' => 'Main Channel',
      'title' => TITLE_NAV_MAIN,
    ],
    [
      'href' => '/sponsor.php#heading',
      'text' => 'Sponsors',
      'title' => TITLE_NAV_SPONSORS,
    ],
    [
      'href' => '/equipment.php#heading',
      'text' => 'Equipment',
      'title' => TITLE_NAV_EQUIPMENT,
    ],
    [
      'href' => '/about.php#heading',
      'text' => 'About',
      'title' => TITLE_NAV_ABOUT,
    ],
    [
      'href' => '/support.php#heading',
      'text' => 'Support the Show!',
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

  tag_open(
    'html',
    [
      'xmlns' => 'http://www.w3.org/1999/xhtml',
      'lang' => 'en',
      'xml:lang' => 'en',
    ]
  );

    tag_open( 'head' );

      $heading_html = henc( $heading );

      if ( $heading === 'Welcome' ) {

        $title_html = "In The Lab With Jay Jay";

      }
      else {

        $title_html = "$heading_html &mdash; In The Lab With Jay Jay";

      }

      $title_text = html_entity_decode( $title_html );

      tag_text( 'title', $title_text );

      /*
      $script_filename = $_SERVER[ 'SCRIPT_FILENAME' ] ?? null;

      if ( $script_filename && file_exists( $script_filename ) ) {

        $last_modified = filemtime( $script_filename );

        assert( date_default_timezone_get() === 'Australia/Sydney' );

        $date = date( 'D d M Y H:i:s', $last_modified ) . ' AEDT';

        tag_bare( 'meta', [ 'name' => 'date', 'content' => $date ] );

      }
      */

      // 2024-08-13 jj5 - OLD: this is removed because it was upsetting the cache...
      //tag_bare( 'meta', [ 'name' => 'date', 'content' => get_version_date() ] );

      tag_bare( 'meta', [ 'name' => 'author', 'content' => 'John Elliot V' ] );

      tag_bare(
        'meta',
        [
          'name' => 'keywords',
          'content' => 'electronics videos, electronics lab, electronics kits, electronics experiments, video blog, In The Lab With Jay Jay, John Elliot V',
        ]
      );

      $description = 'In The Lab With Jay Jay is the video blog of John Elliot V about his misadventures in his electronics lab.';

      tag_bare( 'meta', [ 'name' => 'description', 'content' => $description ] );

      tag_bare( 'meta', [ 'name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0, minimal-ui' ] );

      // 2024-07-11 jj5 - NOTE: we don't count 'from' as a query string, it's a special case for back-compatibility...
      $query = $_GET;
      unset( $query[ 'from' ] );

      if ( isset( $options[ 'robots' ] ) ) {

        tag_bare( 'meta', [ 'name' => 'robots', 'content' => $options[ 'robots' ] ] );

      }
      elseif ( $query ) {

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

      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://fonts.googleapis.com/css?family=Roboto' ] );

      $version = get_resource_version_for_dir( 'style' );

      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => url_base( $use_cdn = true ) . "/res/style.php/$version/style.css" ] );

      $version = get_resource_version_for_dir( 'script' );

      tag_bare( 'script', [ 'src' => url_base( $use_cdn = true ) . "/res/script.php/$version/script.js" ] );

      foreach ([
        'banner-base.jpg',
        'banner-0640.jpg',
        'banner.jpg',
        'logo.png',
        'rss-40674_50.png',
      ] as $filename ) {

        $ext = pathinfo( $filename, PATHINFO_EXTENSION );

        if ( ! in_array( $ext, [ 'jpg', 'jpeg', 'webp', 'png' ] ) ) { continue; }

        tag_bare(
          'link',
          [
            'rel' => 'preload',
            'href' => url_base( $use_cdn = true ) . '/res/img.php/' . $filename . '?v=' . get_resource_version( $filename ),
            'as' => 'image',
          ]
        );

      }

      tag_open( 'script' );

        out_code( "\nvar URL_BASE = " . mud_json_pretty( url_base() ) . ";");
        out_code( "\nvar DEBUG = " . mud_json_pretty( DEBUG ) . ";");
        out_code( "\nvar DEV = " . mud_json_pretty( DEV ) . ";");
        out_code( "\nvar BETA = " . mud_json_pretty( BETA ) . ";");
        out_code( "\nvar PROD = " . mud_json_pretty( PROD ) . ";");
        out_code( "\nvar IS_JOHN = " . mud_json_pretty( is_john() ) . ";");
        out_code( "\nvar CACHE_KEY = " . mud_json_pretty( get_path_hash() ) . ";");

        // 2024-08-12 jj5 - NEW: now sent via cookie...
        out_code( "\nvar MUD_SERVER_VERSION = get_cookie( 'MUD_VERSION' );");
        out_code( "\nvar APP_SERVER_VERSION = get_cookie( 'APP_VERSION' );");
        // 2024-08-12 jj5 - OLD: this messes up our cache so we send this info with a cookie instead...
        //out_code( "\nvar MUD_SERVER_VERSION = " . mud_json_pretty( MUDBALL_VERSION ) . ";");
        //out_code( "\nvar APP_SERVER_VERSION = " . mud_json_pretty( JJLAB_VERSION ) . ";");

      tag_shut( 'script' );

    tag_shut( 'head' );

    tag_open( 'body' );

      tag_open( 'main', [ 'class' => 'wrapper' ] );

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

              tag_bare(
                'img',
                [
                  'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version( 'logo.png' ),
                  'loading' => 'eager',
                ]
              );

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

                        render_link_internal(
                          $link[ 'text' ],
                          url_base() . $link[ 'href' ],
                          $link[ 'title' ],
                          [
                            'class' => 'internal popover-link',
                          ],
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

                render_link_internal(
                  $link[ 'text' ],
                  url_base() . $link[ 'href' ],
                  $link[ 'title' ],
                );

              }

              render_rss_anchor( [ 'class' => 'internal' ] );

            tag_shut( 'div' );

          tag_shut( 'div' );

        tag_shut( 'nav' );

        tag_open( 'header', [ 'id' => 'banner' ] );

          tag_bare(
            'img',
            [
              'loading' => 'eager',
              'class' => 'rc-base',
              'src' => url_base( $use_cdn = true ) . '/res/img.php/banner-base.jpg?v=' . get_resource_version( 'banner-base.jpg' )
            ]
          );

          tag_bare(
            'img',
            [
              'loading' => 'eager',
              'class' => 'rc-0320',
              'src' => url_base( $use_cdn = true ) . '/res/img.php/banner-base.jpg?v=' . get_resource_version( 'banner-base.jpg' )
            ]
          );

          tag_bare(
            'img',
            [
              'loading' => 'eager',
              'class' => 'rc-0640',
              'src' => url_base( $use_cdn = true ) . '/res/img.php/banner-0640.jpg?v=' . get_resource_version( 'banner-0640.jpg' )
            ]
          );

          tag_bare(
            'img',
            [
              'loading' => 'eager',
              'class' => 'rc-1280',
              'src' => url_base( $use_cdn = true ) . '/res/img.php/banner.jpg?v=' . get_resource_version( 'banner.jpg' )
            ]
          );

          tag_bare(
            'img',
            [
              'loading' => 'eager',
              'class' => 'rc-1920',
              'src' => url_base( $use_cdn = true ) . '/res/img.php/banner.jpg?v=' . get_resource_version( 'banner.jpg' )
            ]
          );

        tag_shut( 'header' );

}

function render_foot() {

      tag_shut( 'main' );

      tag_open( 'footer' );

        tag_html( 'div', '&copy; Copyright ' . date( 'Y' ) . ' John Elliot V. All rights reserved.' );

      tag_shut( 'footer' );

      if ( strpos( $_SERVER[ 'HTTP_USER_AGENT' ] ?? '', 'QtWebEngine' ) !== false ) {

        tag_open( 'script' );

        // 2024-06-29 jj5 - NOTE: this is to fix a problem with the page not scrolling to the right place when opened in
        // Akregator. It's a hack, but it works...

        out_code("

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

");

        tag_shut( 'script' );

      }

    tag_shut( 'body' );

  tag_shut( 'html' );

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

function render_rss_anchor() {

  // 2024-07-10 jj5 - NOTE: this RSS feed (which is in the nav header) is to the full thing, it is no longer context
  // affinitve.

  render_link_internal_img(
    url_base( $use_cdn = true ) . '/res/img.php/rss-40674_50.png?v=' . get_resource_version( 'rss-40674_50.png' ),
    url_base() . '/feed.php',
    TITLE_NAV_FEED,
    [
      'style' => 'display:inline-block;width:50px;height:auto;vertical-align:top;margin-top:0px;',
    ]
  );

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

function sort_equipment_list( &$equipment_list ) {

  $sort = $_GET[ 'sort' ] ?? 'expensive-first';

  if ( $sort === 'none' ) {

    // 2024-01-15 jj5 - just leave the array in the order it's in...

  }
  elseif ( $sort === 'expensive-first' ) {

    Equipment::sort_expensive_first( $equipment_list );

  }
  elseif ( $sort === 'cheap-first' ) {

    Equipment::sort_cheap_first( $equipment_list );

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

  tag_bare( 'hr', [ 'style' => 'border: 1px solid gray;' ] );

  $count = count( $equipment_list );

  tag_open( 'div', [ 'class' => 'container', 'style' => 'text-align:center;' ] );

    render_equipment_options( $count, $include_id = false );

  tag_shut( 'div' );

  $total = get_equipment_stats( $equipment_list, $stats );

  if ( $total ) {

    tag_open( 'section' );

      tag_text( 'h2', 'Total Paid and Other Statistics', [ 'id' => 'total-paid' ] );

      tag_open( 'p' );

        $count = $stats[ 'count' ];

        $total_formatted = format_aud_cents( $total );
        $count_formatted = number_format( $count );

        if ( $count === 1 ) {

          out_text( "Total paid for the item on this page: $total_formatted." );

        }
        else {

          out_text( "Total paid for the $count_formatted items on this page: $total_formatted." );

        }

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( 'Note: the values shown here are not exact, for ' );

        render_link_internal(
          'a bunch of reasons',
          url_base() . '/about.php#records',
          'Click here to read about price inaccuracies.',
        );

        out_text( '.' );

      tag_shut( 'p' );

      tag_open( 'table' );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '' );
            tag_text( 'th', 'USD' );
            tag_text( 'th', 'AUD' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          render_stats_rows_aud( $stats );

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

  }

  $item = $count === 1 ? $equipment_list[ 0 ] : null;

  render_equipment_notes_section( $item );

  if ( $item ) {

    render_equipment_disclaimer( $count );

  }

  render_section_contents();

}

function render_stats_rows_aud( $stats ) {

  //render_stat_def_aud( 'Number of Items',     $stats[ 'count' ] );

  render_stat_val_aud( 'Total Paid',          $stats[ 'total' ] );
  render_stat_val_aud( 'Minimum Paid',        $stats[ 'min' ] );
  render_stat_val_aud( 'Maximum Paid',        $stats[ 'max' ] );
  render_stat_val_aud( 'Median Paid',         $stats[ 'medians' ] );
  render_stat_val_aud( 'Average Paid',        $stats[ 'a_mean' ] );
  render_stat_val_aud( 'Standard Deviation',  $stats[ 'std_dev_pop' ] );

}

function render_stat_val_aud( $dt, $arg ) {

  if ( is_array( $arg ) ) {

    $arg = end( $arg );

  }

  tag_open( 'tr' );

    tag_text( 'th', "$dt:", [ 'class' => 'right' ] );

    $aud_formatted = format_aud_cents( $arg );
    $price = new ItemTotal( $aud_formatted );
    $usd = $price->to_USD();
    $usd_formatted = $usd->format();

    tag_text( 'td', $usd_formatted, [ 'class' => 'right' ] );
    tag_text( 'td', $aud_formatted, [ 'class' => 'right' ] );

  tag_shut( 'tr' );

}
function format_aud_cents( $aud_cents ) {


  if ( ! is_numeric( $aud_cents ) ) { dump( $aud_cents ); }

  $value = $aud_cents / 100.0;

  return 'A$' . number_format( $value, 2 );

}

function get_equipment_stats( $equipment_list, &$stats = null ) {

  $list = [];
  $total = 0;

  foreach ( $equipment_list as $equipment ) {

    foreach ( $equipment->get_purchase_list() as $purchase ) {

      $quantity = $purchase->get_order_quantity()->to_int();
      $adjusted_price = $purchase->get_adjusted_price();

      for ( $n = 1; $n <= $quantity; $n++ ) {

        $list[] = $adjusted_price;
        $total += $adjusted_price;

      }
    }
  }

  $stats = mud_get_stats( $list );

  return $total;

}

function render_equipment_notes_section( $item ) {

  static $already_done = false;
  if ( $already_done ) { return; }
  $already_done = true;

  tag_open( 'section' );

    tag_text( 'h2', 'More Information', [ 'id' => 'more-info' ] );

    render_equipment_notes( $item );

  tag_shut( 'section' );

}

function render_equipment_notes( $item ) {

  if ( $item ) {

    tag_open( 'p' );

      $wiki_link = $item->get_sixsigma_url()->to_string();

      if ( $wiki_link ) {

        out_text( "If you would like more information about the " );

        render_link_internal(
          $item->get_equipment_name()->to_string(),
          //$item->get_equipment_id(),
          //$item->get_internal_url()->to_string(),
          url_base() . '/equipment.php#' . $item->get_equipment_id(),
          TITLE_LINK_EQUIPMENT,
        );

        out_text( " you might like to check out " );

        render_link_external(
          'my notes',
          $wiki_link,
          TITLE_LINK_SIXSIGMA,
        );

        out_text( '.' );

      }

    tag_shut( 'p' );

  }

  tag_open( 'p' );

    out_text( "If you would like to see all of my equipment check out the " );

    render_link_internal(
      'equipment',
      url_base() . '/equipment.php#heading',
      TITLE_LINK_EQUIPMENT,
    );

    out_text( " page. You can also get my equipment indexed by " );

    render_link_internal(
      'category',
      url_base() . '/category.php#heading',
      TITLE_LINK_CATEGORY,
    );

    out_text( ' or by ' );

    render_link_internal(
      'manufacturer',
      url_base() . '/manufacturer.php#heading',
      TITLE_LINK_MANUFACTURER,
    );

    out_text( '.' );

  tag_shut( 'p' );

}

function render_equipment_header( $equipment_list ) {

  $count = count( $equipment_list );

  $item = $count === 1 ? $equipment_list[ 0 ] : null;

  tag_open( 'p' );

    out_text( 'Click through on the green affiliate links to buy! ' );
    out_text( "(If I don't have an affiliate link for a product I will give you a normal link in dark blue. " );
    out_text( "You can click through on that to buy too.)" );

  tag_shut( 'p' );

  tag_open( 'p' );

    out_text( 'This page does have a ' );

    render_link_internal(
      'Table of Contents',
      '#contents',
      TITLE_TOC,
    );

    out_text( " but it's at the bottom of the page." );

  tag_shut( 'p' );

  if ( $item ) { render_equipment_notes( $item ); }

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

      out_text( 'Clicking through on these affiliate links (in green) is a good way to support the channel at no cost to you. ' );

      out_text( 'If an affiliate link is unavailble I will give you a normal link (in dark blue) which you can also click through on to buy. ' );

      out_text( 'I may receive a small commission if you buy through these links. ' );

      out_text( 'Thank you for your support!' );

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

        out_text( "Prices are indicative only and can and will go out of date; click through for the latest " );
        out_text( "price." );

      tag_shut( 'li' );

      tag_open( 'li' );

        out_text( "Recent exchange rates are used for currency conversions, not the rates that were applicable " );
        out_text( "at the time of record." );

      tag_shut( 'li' );

      tag_open( 'li' );

        out_text( "Shipping costs and sales tax are not always included in the prices listed here." );

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

      render_link_internal(
        'category',
        url_base() . '/category.php#heading',
        TITLE_LINK_CATEGORY,
      );

      out_text( ' or by ' );

      render_link_internal(
        'manufacturer',
        url_base() . '/manufacturer.php#heading',
        TITLE_LINK_MANUFACTURER,
      );

      out_text( '.' );

    tag_shut( 'p' );

    tag_open( 'p' );

      out_text( 'If you have thoughts or questions please feel free to ' );

      render_link_internal(
        'let me know',
        url_base() . '/contact.php#heading',
        TITLE_CONTACT,
      );

      out_text( '.' );

    tag_shut( 'p' );

    tag_open( 'p' );

      out_text( "Let's go shopping!" );

    tag_shut( 'p' );

  tag_shut( 'section' );

}

function render_youtube_template( $equipment_list ) {

  sort_equipment_list( $equipment_list );

  $row_number = 0;

  tag_open( 'textarea', [ 'style' => 'height:400px;' ] );

  $header = "
If you like my stuff please consider supporting me on Patreon: https://www.patreon.com/JohnElliotV

Super big thank you to my subscribers and my Patreon supporters! ❤️

The show notes for this video are here: https://blog.jj5.net/

If you enjoyed this video please remember to hit subscribe so you don't miss the next one. If you have any questions or suggestions please do hit me up in the comments section.

Following is a list of products I use which may appear in my videos. Clicking through on these links before purchasing from Amazon, eBay, or AliExpress is a great way to support the channel at no cost to you. Thanks!

https://jj5.net/14480 Maxitronix Electronics Project Labs
https://jj5.net/30977 Dremel Rotary Tool and Accessories
";

  $footer = "
If you have any questions about any of the products I use please do ask in the comments section. I'm always happy to help.

" . TAGLINE_THANKS;

  out_text( $header );

  $length = strlen( $header ) + strlen( $footer );

  // 2024-07-21 jj5 - the description limit is 5,000 characters and the URL length for the show notes is maximum 100
  // characters in addition to the URL base "https://blog.jj5.net/" given above...
  //
  $limit = 5000 - 100 - strlen( 'blog/yyyy/mm/dd/' );

  foreach ( $equipment_list as $equipment ) {

    if ( $equipment->is_manufactured_by( 'Maxitronix' ) ) { continue; }
    if ( $equipment->is_manufactured_by( 'Dremel' ) ) { continue; }

    $row_number++;

    $link = $equipment->get_short_link();
    $name = $equipment->get_equipment_name();

    // 2024-08-11 jj5 - remove the 'Yum Cha ' prefix from the name because it takes up space and delivers no value.
    //
    $name = str_replace( 'Yum Cha ', '', $name );

    $length += strlen( $link ) + strlen( $name ) + 2;

    if ( $length > $limit ) { break; }

    out_text( $link );
    out_text( ' ' );
    out_text( $name );
    out_text( "\n" );


  }

  out_text( $footer );

  tag_shut( 'textarea' );

  tag_text(
    'button',
    'Copy',
    [
      'onclick' => 'copy_preceding_textarea_to_clipboard( this, event )',
      'style' => 'display:block;margin:20px auto;',
    ]
  );

}

function render_blog_template( $equipment_list ) {

  sort_equipment_list( $equipment_list );

  tag_open( 'textarea', [ 'style' => 'height:400px;' ] );

    nip_init();

      mud_html_set_opt( MUD_HTML_OPT_SPACE, true );
      mud_html_set_opt( MUD_HTML_OPT_BREAK, false );

      out_text( "\n" );
      out_text( "This post is part of my " );

      render_link_external(
        'video blog',
        'https://www.inthelabwithjayjay.com/',
        TITLE_BLOG_JJLAB,
        [
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => false,
        ],
      );

      out_text( " and you can find more information about this video " );

      render_link_external(
        "over here",
        '#',
        TITLE_BLOG_VIDEO_LINK,
        [
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => true,
        ],
      );

      out_text( ".\n" );

      tag_open(
        'iframe',
        [
          'src' => 'https://www.youtube.com/embed/to9cunh46bw',
          'allow' => 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture',
          'allowfullscreen' => 'true',
          'width' => '560',
          'height' => '315',
        ]
      );

      tag_shut( 'iframe' );

      out_text( "\n\nYou can support this channel on Patreon: " );

      render_link_external(
        'patreon.com/JohnElliotV',
        'https://www.patreon.com/JohnElliotV',
        TITLE_BLOG_PATREON,
        [
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => false,
        ],
      );

      out_text( "\n\n" );

      render_link_external(
        'Silly Job Title',
        'https://www.inthelabwithjayjay.com/in-the-lab/#silly-job-title',
        'Click here to read about the silly job title.',
        [
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => false,
        ],
      );

      out_text( ": ..." );

      out_text( "\n\nIn this video I ...\n\n" );

      out_text( TAGLINE_THANKS );

      out_text( "\n\n" );

      mud_html_set_opt( MUD_HTML_OPT_SPACE, false );
      mud_html_set_opt( MUD_HTML_OPT_BREAK, true );

      render_equipment_template( $equipment_list );

    nip_done( $html, $echo = true );

  tag_shut( 'textarea' );

  tag_text(
    'button',
    'Copy',
    [
      'onclick' => 'copy_preceding_textarea_to_clipboard( this, event )',
      'style' => 'display:block;margin:20px auto;',
    ]
  );

  tag_open( 'textarea', [ 'style' => 'height:400px;' ] );

    nip_init();

      mud_html_set_opt( MUD_HTML_OPT_SPACE, false );
      mud_html_set_opt( MUD_HTML_OPT_BREAK, true );

      render_equipment_template( $equipment_list );

    nip_done( $html, $echo = true );

  tag_shut( 'textarea' );

  tag_text(
    'button',
    'Copy',
    [
      'onclick' => 'copy_preceding_textarea_to_clipboard( this, event )',
      'style' => 'display:block;margin:20px auto;',
    ]
  );

}

function render_equipment_template( $equipment_list ) {

  $row_number = 0;

  tag_bare( 'hr' );

  out_text( 'Following is a product I use picked at random from ' );

    tag_text(
      'a',
      'my collection',
      [
        'class' => 'external',
        'target' => '_blank',
        'rel' => 'noopener follow',
        'href' => 'https://www.inthelabwithjayjay.com/in-the-lab/equipment.php#heading',
        'title' => 'Click here to see all of my equipment.',
      ]
    );

  out_text( ' which may appear in my videos. ' );

  out_text( 'Clicking through on this to find and click on the green affiliate links before purchasing from ' );
  out_text( 'eBay or AliExpress is a great way to support the channel at no cost to you. Thanks!' );
  out_text( "\n\n" );

  $end_id = date( 'Y-m-d-His' );

  /*
  out_text( 'Note: you can ' );
  render_link_internal( 'skip this', '#' . $end_id, 'Click here to skip the product list.' );
  out_text( " if you would prefer.\n\n" );
  */

  tag_open( 'table', [ 'class' => 'table equipment' ] );

    tag_open( 'tbody' );

      foreach ( $equipment_list as $equipment ) {

        $row_number++;

        $thumb = $equipment->get_equipment_icon()->get_public_url();
        $product = $equipment->get_equipment_name();
        $link = $equipment->get_short_link();
        $notes = strval( $equipment->get_sixsigma_url() );

        tag_open( 'tr' );

          tag_open(
            'td',
            [
              'class' => 'product',
              'style' => 'text-align: center !important; border-top: 1px solid #ddd;',
            ]
            );

            tag_open(
              'a',
              [
                'class' => 'external',
                'target' => '_blank',
                'rel' => 'noopener follow',
                'href' => $link,
                'title' => mud_format_string( TITLE_TEMPLATE_BLOG_PRODUCT, [ 'product' => $product ] ),
                'style' => 'display: block !important; color: #1982d1; text-decoration: none;',
              ]
            );

              tag_text(
                'span',
                $product,
                [
                  'class' => 'product-name',
                  'style' => 'display: block !important; color: #1982d1; text-decoration: none; font-size: 30px; margin: 20px auto;',
                ]
              );

              tag_bare(
                'img',
                [
                  'class' => 'thumb',
                  'loading' => 'lazy',
                  'src' => $thumb,
                  'alt' => 'This is an image of the product.',
                  // 2024-07-29 jj5 - NEW:
                  'style' => 'display: block !important; border: 1px solid black; border-radius: 10px; margin: 20px auto; height: auto !important; width: 150px;',
                  // 2024-07-29 jj5 - OLD:
                  //'style' => 'display: block !important; border: 1px solid black; border-radius: 10px; margin: 20px auto; min-width: 50% !important; height: auto !important; width: 150px;',
                ]
              );

            tag_shut( 'a' );

            if ( $notes ) {

              tag_open(
                'a',
                [
                  'class' => 'notes',
                  'target' => '_blank',
                  'rel' => 'noopener follow',
                  'href' => $notes,
                  'title' => mud_format_string( TITLE_TEMPLATE_BLOG_PRODUCT_NOTES, [ 'product' => $product ] ),
                  'style' => 'display: block !important; color: #1982d1; text-decoration: none;',
                ]
              );

                out_text( 'notes' );

              tag_shut( 'a' );

            }

          tag_shut( 'td' );

        tag_shut( 'tr' );

      }

    tag_shut( 'tbody' );

  tag_shut( 'table' );

  out_text( "\n\n" );

  // 2024-08-17 jj5 - NEW:
  tag_text( 'p', "Let's go shopping!" );
  // 2024-08-17 jj5 - OLD:
  //tag_text( 'p', "Let's go shopping!", [ 'id' => $end_id ] );

}

function render_equipment_table( $equipment_list ) {

  tag_open( 'div', [ 'class' => 'equipment equipment-table' ] );

    render_equipment_options( count( $equipment_list ) );

    tag_open( 'table', [ 'id' => 'equipment', 'class' => 'main' ] );

      tag_open( 'tbody' );

        $row_number = 0;

        foreach ( $equipment_list as $equipment ) {

          $row_number++;

          $affiliate_link_list = $equipment->get_affiliate_link_list();
          $purchase_list = $equipment->get_purchase_list();

          $count = count( $affiliate_link_list );
          $other_adjust = count( $purchase_list );

          if ( $purchase_list ) {

            $adjust = 5;
            $count += count( $purchase_list );

          }
          else {

            $adjust = 4;

          }

          $count = $count + $adjust;

          $aud_total = 0;
          $item_count = 0;

          if ( count( $affiliate_link_list ) ) {

            $img_url = $equipment->get_equipment_icon()->get_auto_url();

            $id = $equipment->get_equipment_id();

            // 2024-08-06 jj5 - HACK! I don't understand how this duplicate ID can happen...
            //
            if ( mud_html_has_id( $id ) ) { $id = $id . '-' . $row_number; }

            $short_link = $equipment->get_short_link();

            tag_open( 'tr', [ 'class' => "spacer row-$row_number" ] );

              tag_bare( 'td', [ 'colspan' => 7 ] );

            tag_shut( 'tr' );

            tag_open( 'tr' );

              tag_open( 'td', [ 'class' => 'equipment img', 'rowspan' => $count ] );

                tag_open(
                  'a',
                  [
                    'class' => 'internal equipment-link',
                    'rel' => 'follow',
                    'href' => url_base() . '/equipment.php#' . $id,
                    'title' => TITLE_LINK_ITEM,
                  ]
                );

                  tag_open( 'div' );

                    $equipment->render();

                  tag_shut( 'div' );

                  tag_open( 'div' );

                    tag_bare(
                      'img',
                      [
                        'src' => $img_url,
                        'alt' => 'This is a picture of the product.',
                        'loading' => 'lazy',
                      ]
                    );

                  tag_shut( 'div' );

                tag_shut( 'a' );

                tag_open( 'div' );

                  $equipment->get_first_purchase_date()->render();

                tag_shut( 'div' );

                tag_open( 'div' );

                  render_link_external(
                    $short_link,
                    $short_link,
                    TITLE_LINK_SHORT,
                  );

                tag_shut( 'div' );

                tag_open( 'div' );

                  $short_link_parts = explode( '/', $short_link );
                  $jjcode = $short_link_parts[ 3 ];

                  out_text( "JJCODE: $jjcode" );

                tag_shut( 'div' );

                if ( is_dev() ) {

                  tag_bare( 'hr' );

                  foreach ( get_list( Affiliate::class ) as $affiliate ) {

                    $href = $affiliate->get_search_url( $equipment->get_equipment_name()->to_string() );
                    $text = $affiliate->get_affiliate_name()->format();

                    tag_open( 'div' );

                      render_link_external(
                        $text,
                        $href,
                        TITLE_SEARCH_AFFILIATE,
                      );

                    tag_shut( 'div' );

                  }
                }

              tag_shut( 'td' );

              tag_open( 'td', [ 'colspan' => 7, 'class' => 'equipment', 'style' => 'height:20px' ] );

                tag_open( 'h2', [ 'id' => $id ] );

                  $equipment->render();

                tag_shut( 'h2' );

                $link_list = $equipment->get_category_list();
                $manufacturer = $equipment->get_equipment_info()->get_manufacturer_name();

                if ( ! $manufacturer->is_null() ) { array_unshift( $link_list, $manufacturer ); }

                $link_number = 0;

                foreach ( $link_list as $link ) {

                  $link_number++;

                  if ( $link_number !== 1 ) { out_text( ' | ' ); }

                  if ( is_a( $link, Category::class ) ) {

                    render_link_internal(
                      $link,
                      url_base() . '/category.php/' . $link->get_category_id() . '#heading',
                      TITLE_LINK_CATEGORY_SELECTION,
                    );

                  }
                  else {

                    render_link_internal(
                      $link,
                      url_base() . '/manufacturer.php/' . $link->get_manufacturer_id() . '#heading',
                      TITLE_LINK_MANUFACTURER_SELECTION,
                    );

                  }
                }

              tag_shut( 'td' );

            tag_shut( 'tr' );

          }

          tag_open( 'tr', [ 'style' => 'height:20px;' ] );

            tag_text( 'th', 'Affiliate', [ 'style' => 'width:5% !important;' ] );

            tag_text( 'th', 'Unit Price', [ 'colspan' => 2, 'style' => 'width:10% !important;' ] );

            tag_text( 'th', 'Affiliate Link (Click here for the latest price and to buy!)' );

            tag_text( 'th', 'Option(s)', [ 'style' => 'width:20% !important;' ] );

            tag_text( 'th', 'Notes', [ 'style' => 'width:4rem !important;' ] );

          tag_shut( 'tr' );

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

            tag_open( 'tr', [ 'style' => 'height:20px;' ] );

              $text_html = $affiliate->get_affiliate_name()->to_nbsp();

              tag_html( 'td', "$text_html:", [ 'class' => 'affiliate' ] );

              $equipment_date = $equipment->get_equipment_date();
              $title = "Price current as of $equipment_date";

              $text = $affiliate_link->get_item_price()->format();

              tag_text( 'td', "$text", [ 'colspan' => 2, 'class' => 'price', 'title' => $title ] );

              tag_open(
                'td',
                [
                  'class' => 'affiliate_link',
                  'title' => TITLE_AFFILIATE_LINK,
                ]
              );

                $affiliate_link->render();

              tag_shut( 'td' );

              if ( ! $affiliate_link->get_item_options()->is_null() ) {

                $item_options_html = $affiliate_link->get_item_options()->to_html();

                tag_html( 'td', $item_options_html, [ 'class' => 'item_options center' ] );

              }
              else {

                tag_open( 'td' );

                tag_shut( 'td' );

              }

              if ( $affiliate_number === 1 ) {

                $notes_url = $equipment->get_sixsigma_url()->to_string();

                $notes_adjust = $count - $adjust - $other_adjust;

                if ( $notes_url ) {

                  tag_open(
                    'td',
                    [
                      'colspan' => 1,
                      'rowspan' => $notes_adjust,
                      'class' => 'notes',
                      'style' => 'vertical-align:top !important; text-align: center;',
                    ]
                  );

                    render_link_external(
                      'notes',
                      $notes_url,
                      TITLE_LINK_SIXSIGMA,
                    );

                  tag_shut( 'td' );

                }
                else {

                  tag_open( 'td', [ 'colspan' => 1, 'rowspan' => $notes_adjust, 'class' => 'notes'] );

                  tag_shut( 'td' );

                }
              }

            tag_shut( 'tr' );

          }

          tag_open( 'tr' );

            tag_open( 'td', [ 'colspan' => 7 ] );

              $warning_list = $equipment->get_warning_list();

              if ( $warning_list ) {

                tag_text( 'p', 'Warning:' );

                tag_open( 'ul' );

                  foreach ( $warning_list as $warning ) {

                    $text_html = $warning->to_html();

                    tag_html( 'li', $text_html, [ 'class' => 'warning' ] );

                  }

                tag_shut( 'ul' );

              }

              $see_also_list = $equipment->get_see_also_list();

              if ( $see_also_list ) {

                tag_text( 'p', 'See also:' );

                tag_open( 'ul' );

                  foreach ( $see_also_list as $see_also ) {

                    $text_html = $see_also->to_html();
                    $id = str_replace( ' ', '-', $see_also->to_string() );

                    tag_open( 'li' );

                      tag_html(
                        'a',
                        $text_html,
                        [
                          'href' => url_base() . "/equipment.php#$id",
                          'class' => 'internal',
                          'title' => TITLE_LINK_SEE_ALSO,
                        ]
                      );

                    tag_shut( 'li' );

                  }

                tag_shut( 'ul' );

              }

              $web_link_list = $equipment->get_web_link_list();

              if ( $web_link_list ) {

                tag_text( 'p', 'Links:' );

                tag_open( 'ul' );

                  foreach ( $web_link_list as $link ) {

                    $link_html = $link->to_html();

                    tag_open( 'li' );

                      out_html( $link_html );

                    tag_shut( 'li' );

                  }

                tag_shut( 'ul' );

              }

              $link_list = $equipment->get_equipment_info()->get_manufacturer_link_list();

              if ( $link_list ) {

                tag_text( 'p', 'Manufacturer links:' );

                tag_open( 'ul' );

                  foreach ( $link_list as $link ) {

                    $link_html = $link->to_html();

                    tag_open( 'li' );

                      out_html( $link_html );

                    tag_shut( 'li' );

                  }

                tag_shut( 'ul' );

              }

              $directory_name = $equipment->get_directory_name();

              if ( $directory_name ) {

                tag_text( 'p', 'Directory name:' );

                tag_text( 'p', $directory_name, [ 'class' => 'indent' ] );

              }

              tag_text( 'p', 'Wiki name:' );

              tag_text( 'p', $equipment->format(), [ 'class' => 'indent' ] );

            tag_shut( 'td' );

          tag_shut( 'tr' );

          if ( $purchase_list ) {

            tag_open( 'tr', [ 'style' => 'height:20px' ] );

              tag_text( 'th', 'Vendor' );

              tag_text( 'th', 'Unit Price' );

              tag_text(
                'th',
                'Ancillary Charges',
                [
                  'title' => 'This includes shipping costs and tax less discounts.',
                ]
              );

              tag_text( 'th', 'Purchase History (The specific things I purchased)' );

              tag_text( 'th', 'Option(s)' );

              //tag_text( 'th', 'Notes' );
              tag_text( 'th', 'Total (AUD)', [ 'style' => 'width:125px' ] );

            tag_shut( 'tr' );

            foreach ( $purchase_list as $purchase ) {

              $vendor_html = henc( $purchase->get_vendor() );

              $quantity = $purchase->get_order_quantity();
              $price = $purchase->get_order_price();
              $subtotal = $price->multiply_price( $quantity->get_number() );

              $date = $purchase->get_order_date();

              $shipping = $purchase->get_order_shipping();

              $tax = $purchase->get_order_tax();

              $discount = $purchase->get_order_discount();

              $ancillary_charges = null;

              if ( ! $shipping->is_null() ) {

                $ancillary_charges = $shipping->add_price( $tax )->subtract_price( $discount );

              }
              elseif ( ! $tax->is_null() ) {

                $ancillary_charges = $tax->subtract_price( $discount );

              }
              elseif ( ! $discount->is_null() ) {

                $ancillary_charges = $discount->invert_price();

              }

              $ancillary_charges_html = $ancillary_charges ? $ancillary_charges->to_html() : '';

              $total = $subtotal->add_price( $ancillary_charges );

              $aud_total += $total->to_AUD()->to_int();
              $item_count += $quantity->get_number();

              $number = $quantity->get_value();

              $number = NUMBER_MAP[ $number ] ?? $number;

              $options_html = $purchase->get_order_options()->to_html();

              $href = '#' . $purchase->get_parent()->get_equipment_id();

              $vendor_url = $purchase->get_vendor_url();

              if ( ! $vendor_url->is_null() ) { $href = $vendor_url->to_html(); }

              $each = $number === 1 ? '' : 'each';
              $plus = $shipping->get_value()->get_value() > 0 ? 'and' : 'plus';

              $order_url = $purchase->get_order_url()->to_string();
              $order_id = $purchase->get_order_id()->to_string();

              // 2024-01-27 jj5 - TODO: review this tool tip, it's not very good

              $order_item_name = $purchase->get_order_item_name()->to_string();

              tag_open( 'tr', [ 'style' => 'height:20px' ] );

                tag_html( 'td', "$vendor_html:", [ 'class' => 'vendor' ] );

                tag_open( 'td', [ 'class' => 'subtotal price' ] );

                  $subtotal->render();

                tag_shut( 'td' );

                tag_html( 'td', "$ancillary_charges_html", [ 'class' => 'ancillary price' ] );

                tag_open( 'td' );

                  out_text( 'I purchased ' );

                  render_link_external(
                    "$number of these",
                    $href,
                    $order_item_name,
                  );

                  $price_string = $price->format();

                  out_text( " on $date for $price_string $each" );

                  if ( $shipping->get_money()->get_value() > 0 ) {

                    $shipping_string = $shipping->format();

                    out_text( " plus shipping of $shipping_string" );

                  }
                  else {

                    out_text( " with free shipping" );

                  }

                  if ( $tax->get_money()->get_value() > 0 ) {

                    $tax_string = $tax->format();

                    out_text( " $plus tax of $tax_string" );

                  }

                  if ( $discount->get_money()->get_value() > 0 ) {

                    $discount_string = $discount->format();

                    out_text( " and a discount of $discount_string" );

                  }

                  $total_string = $total->format();

                  out_text( " for a total of $total_string." );

                  if ( is_dev() ) {

                    render_link_external(
                      $order_id,
                      $order_url,
                      TITLE_LINK_ORDER,
                    );

                  }

                tag_shut( 'td' );

                tag_html( 'td', $options_html, [ 'class' => 'center' ] );

                tag_text(
                  'td',
                  format_price_aud( $total ),
                  [ 'class' => 'total right' ]
                );

              tag_shut( 'tr' );

            }

            tag_open( 'tr' );

              tag_text(
                'td',
                "I purchased $item_count of these for total (AUD):",
                [
                  'class' => 'right',
                  'colspan' => 5,
                ]
              );

              tag_text( 'td', format_intprice_aud( $aud_total ), [ 'class' => 'right' ] );

            tag_shut( 'tr' );

          }
        }

      tag_shut( 'tbody' );

    tag_shut( 'table' );

  tag_shut( 'div' );

}

function format_price_aud( $price ) {

  return format_intprice_aud( $price->to_AUD()->to_int() );

}

function format_intprice_aud( $price ) {

  return '$' . number_format( $price / 100.0, 2 );

}

function render_equipment_list( $equipment_list ) {

  tag_open( 'div', [ 'class' => 'equipment equipment-list' ] );

    render_equipment_options( count( $equipment_list ) );

    $row_number = 0;

    foreach ( $equipment_list as $equipment ) {

      $row_number++;

      $affiliate_link_list = $equipment->get_affiliate_link_list();

      $img_url = $equipment->get_equipment_icon()->get_auto_url();
      $equipment_text = $equipment->get_equipment_name();

      $id = $equipment->get_equipment_id();

      $short_link = $equipment->get_short_link();

      tag_open( 'section', [ 'class' => 'container' ] );

        //tag_bare( 'br', [ 'style' => 'clear:both' ] );

        tag_open( 'h2', [ 'id' => $id, 'class' => 'equipment clearfix' ] );

          out_text( $equipment_text );

        tag_shut( 'h2' );

        tag_bare( 'img', [ 'src' => $img_url, 'alt' => $equipment_text ] );

        tag_open( 'dl' );

          tag_text( 'dt', 'Short link' );

          tag_open( 'dd' );

            $short_link_url = $short_link;

            /*
            if ( is_dev() ) {

              $short_link_url = "#$id";

            }
            */

            render_link_external(
              $short_link,
              $short_link_url,
              TITLE_LINK_SHORT,
            );

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

                  out_text( $affiliate_link->get_item_price()->format() );

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

              render_link_external(
                'notes',
                $notes_url,
                TITLE_LINK_SIXSIGMA,
              );

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

            $number = $quantity->get_value();
            $number_name = NUMBER_MAP[ $number ] ?? $number;
            $href = '#' . $purchase->get_parent()->get_equipment_id();
            $vendor_url = $purchase->get_vendor_url();

            if ( ! $vendor_url->is_null() ) { $href = $vendor_url->to_html(); }

            $each = $number === 1 ? '' : ' each';

            tag_open( 'dt' );

              out_text( 'I purchased ' );

              render_link_external(
                "$number_name of these",
                $href,
                TITLE_LINK_PURCHASED,
              );

              out_text( ' from ' );

              out_text( $purchase->get_vendor() );

              out_text( ' on ' );

              out_text( $purchase->get_order_date()->format() );

              out_text( ' for ' );

              out_text( $purchase->get_order_price()->format() );

              out_text( $each );

              out_text( '.' );

            tag_shut( 'dt' );

            tag_open( 'dd' );

            tag_shut( 'dd' );

          }

        tag_shut( 'dl' );

      tag_shut( 'section' );

    }

  tag_shut( 'div' );

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

function render_equipment_options( int $count, bool $indclude_id = true ) {

  $attrs = $indclude_id ? [ 'id' => 'options' ] : [];

  tag_open( 'div', $attrs );

    tag_open( 'p' );

      out_text( 'Prices in: ' );

      render_link_internal_nofollow(
        'USD',
        '?' . get_link( [ 'currency' => 'USD' ] ) . '#options',
        TITLE_PRICE_USD,
      );

      out_text( ' | ' );

      render_link_internal_nofollow(
        'AUD',
        '?' . get_link( [ 'currency' => 'AUD' ] ) . '#options',
        TITLE_PRICE_AUD,
      );

      out_text( ' | ' );

      render_link_internal_nofollow(
        'default',
        '?' . get_link_without( 'currency' ) . '#options',
        TITLE_PRICE_DEFAULT,
      );

      if ( $count > 1 ) {

        out_html( ' &mdash; ' );

        out_text( 'Sort: ' );

        render_link_internal_nofollow(
          'cheap first',
          '?' . get_link( [ 'sort' => 'cheap-first' ] ) . '#options',
          TITLE_SORT_CHEAP_FIRST,
        );

        out_text( ' | ' );

        render_link_internal_nofollow(
          'expensive first',
          '?' . get_link( [ 'sort' => 'expensive-first' ] ) . '#options',
          TITLE_SORT_EXPENSIVE_FIRST,
        );

        out_text( ' | ' );

        render_link_internal_nofollow(
          'newest first',
          '?' . get_link( [ 'sort' => 'new-first' ] ) . '#options',
          TITLE_SORT_NEW_FIRST,
        );

        out_text( ' | ' );

        render_link_internal_nofollow(
          'oldest first',
          '?' . get_link( [ 'sort' => 'old-first' ] ) . '#options',
          TITLE_SORT_OLD_FIRST,
        );

        out_text( ' | ' );

        render_link_internal_nofollow(
          'random',
          '?' . get_link( [ 'sort' => 'random' ] ) . '#options',
          TITLE_SORT_RANDOM,
        );

        out_text( ' | ' );

        render_link_internal_nofollow(
          'default',
          '?' . get_link_without( 'sort' ) . '#options',
          TITLE_SORT_DEFAULT,
        );

      }

    tag_shut( 'p' );

  tag_shut( 'div' );

}

function get_data_sort_value_for_changefreq( $changefreq ) {

  $enum = is_string( $changefreq ) ? ChangeFreq::from( $changefreq ) : $changefreq;

  switch ( $enum ) {

    case ChangeFreq::Always:  return 8;
    case ChangeFreq::Hourly:  return 7;
    case ChangeFreq::Daily:   return 6;
    case ChangeFreq::Weekly:  return 5;
    case ChangeFreq::Monthly: return 4;
    case ChangeFreq::Yearly:  return 3;
    case ChangeFreq::Never:   return 2;
    default :                 return 1;

  }
}

function get_version_date() {

  static $result = null;
  static $datetime = null;
  static $utc = null;

  if ( $result ) { return $result; }

  if ( ! $utc ) { $utc = new DateTimeZone( 'UTC' ); }

  //'$Date: 2024-06-29 03:10:16 +1000 (Sat, 29 Jun 2024) $'

  if ( preg_match( '/(\d{4}-\d{2}-\d{2}) ([^ ]*) ([^ ]*)/', JJLAB_SVN_DATE, $matches ) ) {

    $date = $matches[ 1 ];
    $time = $matches[ 2 ];
    $zone = $matches[ 3 ];

    $datetime = new DateTime( $date . ' ' . $time . ' ' . $zone );

  }
  else {

    $datetime = new DateTime();

  }

  $datetime->setTimezone( $utc );

  $result = $datetime->format( DATE_FORMAT_FOR_SITEMAP );

  return $result;

}
