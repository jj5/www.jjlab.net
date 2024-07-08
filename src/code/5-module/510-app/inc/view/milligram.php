<?php

require_once __DIR__ . '/section.php';

function render_coming_soon() {

  http_response_code( 500 );

  render_head( 'Coming Soon' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version() ] );

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

        tag_bare( 'img', [ 'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version() ] );

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

          tag_text( 'a', 'homepage', [ 'href' => url_base() . '/', 'class' => 'internal' ] );

          out_text( '.' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'If you believe this is an error, please ' );

          tag_text( 'a', 'contact us', [ 'href' => url_base() . '/contact.php', 'class' => 'internal' ] );

          out_text( '.' );

        tag_shut( 'li' );

      tag_shut( 'ul' );

      tag_text( 'p', 'Thank you for your understanding.' );

    tag_shut( 'section' );

  render_foot();

}

function render_500( $message = null, $form = null, $issue = null, $exit = null, $ex = null ) {

  http_response_code( 500 );

  // 2024-07-05 jj5 - NOTE: I was "Internal Error" rather than "Internal Server Error" because I don't want the user to
  // misread as "Internal Severe Error" and freak out...
  //
  $title = '500 - Internal Error';

  render_head( $title, [ 'robots' => 'noindex' ] );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version() ] );

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

          tag_text( 'a', 'homepage', [ 'href' => url_base() . '/', 'class' => 'internal' ] );

          out_text( '.' );

        tag_shut( 'li' );

      tag_shut( 'ul' );

      tag_open( 'p' );

        out_text( 'If the problem persists, please ' );

        tag_text( 'a', 'contact us', [ 'href' => url_base() . '/contact.php', 'class' => 'internal' ] );

        out_text( ' to let us know.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

  render_foot();

}



function render_head( $heading, array $options = [] ) {

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

      if ( isset( $options[ 'robots' ] ) ) {

        tag_bare( 'meta', [ 'name' => 'robots', 'content' => $options[ 'robots' ] ] );

      }
      elseif ( isset( $_GET[ 'sort' ] ) || isset( $_GET[ 'currency' ] ) ) {

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

      $version = get_resource_version();

      // 2024-07-03 jj5 - OLD: this stuff has been consolidated now...
      /*
      // 2024-01-24 jj5 - CSS reset...
      //
      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => url_base( $use_cdn = true ) . '/res/style/milligram/normalize.css' ] );
      //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css' ] );


      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => "https://d27cckvuinr11o.cloudfront.net/global/table.css?v=$version" ] );
      //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://www.staticmagic.net/global/table.css?v=2024-01-12-123831' ] );

      // 2024-01-24 jj5 - Milligram CSS...
      //
      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => url_base( $use_cdn = true ) . '/res/style/milligram/milligram.css' ] );
      //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css' ] );

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
      */

      tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => url_base( $use_cdn = true ) . "/res/style.php?v=$version" ] );

      tag_open( 'script' );

        out_code( "\nvar MUD_SERVER_VERSION = " . json_encode( MUDBALL_VERSION ) . ";\n");
        out_code( "\nvar APP_SERVER_VERSION = " . json_encode( JJLAB_VERSION ) . ";\n");
        out_code( "\nvar URL_BASE = " . json_encode( url_base() ) . ";\n");
        out_code( "\nvar DEBUG = " . json_encode( DEBUG ) . ";\n");
        out_code( "\nvar IS_JOHN = " . json_encode( is_john() ) . ";\n");

      tag_shut( 'script' );

      // 2024-07-03 jj5 - OLD: this stuff has been consolidated now...
      /*
      tag_bare( 'script', [ 'src' => "https://d27cckvuinr11o.cloudfront.net/global/default.js?v=$version" ] );
      //tag_bare( 'script', [ 'src' => 'https://www.staticmagic.net/global/default.js?v=2024-01-12-123831' ] );

      //$hash = md5_file( __DIR__ . '/../../../../../web/root/in-the-lab/res/script/common.js' );

      tag_bare( 'script', [ 'src' => url_base( $use_cdn = true ) . "/res/script/common.js?v=$version" ] );
      */

      tag_bare( 'script', [ 'src' => url_base( $use_cdn = true ) . "/res/script.php?v=$version" ] );


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
            'href' => url_base( $use_cdn = true ) . '/res/img.php/' . $filename . '?v=' . get_resource_version(),
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

              tag_bare( 'img', [ 'src' => url_base( $use_cdn = true ) . '/res/img.php/logo.png?v=' . get_resource_version() ] );

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

          tag_bare( 'img', [ 'class' => 'rc-base', 'src' => url_base( $use_cdn = true ) . '/res/img.php/banner-base.jpg?v=' . get_resource_version() ] );

          tag_bare( 'img', [ 'class' => 'rc-0320', 'src' => url_base( $use_cdn = true ) . '/res/img.php/banner-base.jpg?v=' . get_resource_version() ] );

          tag_bare( 'img', [ 'class' => 'rc-0640', 'src' => url_base( $use_cdn = true ) . '/res/img.php/banner-0640.jpg?v=' . get_resource_version() ] );

          tag_bare( 'img', [ 'class' => 'rc-1280', 'src' => url_base( $use_cdn = true ) . '/res/img.php/banner.jpg?v=' . get_resource_version() ] );

          tag_bare( 'img', [ 'class' => 'rc-1920', 'src' => url_base( $use_cdn = true ) . '/res/img.php/banner.jpg?v=' . get_resource_version() ] );

        tag_shut( 'header' );

}

function render_foot() {

      tag_shut( 'main' );

      tag_open( 'footer' );

        tag_html( 'div', '&copy; Copyright ' . date( 'Y' ) . ' John Elliot V. All rights reserved.' );

      tag_shut( 'footer' );

      if ( strpos( $_SERVER[ 'HTTP_USER_AGENT' ] ?? '', 'QtWebEngine' ) !== false ) {

        tag_open( 'script' );

        out_code("

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

function render_rss_anchor( $attrs = [] ) {

  // 2024-07-03 jj5 - NOTE: I'm not going to keep the RSS links as context affinitive, instead the RSS link in the header
  // will always link to the main feed...

  $url = url_base() . '/feed.php';
  $title = TITLE_NAV_FEED;

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
        'src' => url_base( $use_cdn = true ) . '/res/img.php/rss/rss-40674_50.png?v=' . get_resource_version(),
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

  tag_open( 'ul' );

    foreach ( get_list( MaxitronixKit::class ) as $kit ) {

      $kit_name = $kit->get_maxitronix_kit_name()->to_string();

      tag_open( 'li' );

        tag_text(
          'a',
          'Maxitronix ' . $kit_name,
          [
            'href' => url_base() . '/show-type.php/maxitronix-' . $kit_name,
            'class' => 'internal',
            'rel' => 'follow',
            'title' => MaxitronixKit::get_html_title( $kit_name ),
          ]
        );

      tag_shut( 'li' );

    }

  tag_shut( 'ul' );

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

The show notes for this video are here: https://blog.jj5.net/

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

" . TAGLINE_THANKS );

  tag_shut( 'textarea' );

}

function render_blog_template( $equipment_list ) {

  sort_equipment_list( $equipment_list );

  $row_number = 0;

  tag_open( 'textarea', [ 'style' => 'height:400px;' ] );

    nip_init();

      mud_html_set_opt( MUD_HTML_OPT_SPACE, true );
      mud_html_set_opt( MUD_HTML_OPT_BREAK, false );

      out_text( "\n" );
      out_text( "This post is part of my " );
      
      tag_text(
        'a',
        'video blog',
        [
          'href' => 'https://www.inthelabwithjayjay.com/',
          'target' => '_blank',
          'rel' => 'follow',
          'title' => TITLE_BLOG_JJLAB,
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => false,
        ]
      );

      out_text( " and you can find more information about this video on " );

      tag_text(
        'a',
        "this show's homepage",
        [
          'href' => '#',
          'target' => '_blank',
          'rel' => 'follow',
          'title' => TITLE_BLOG_VIDEO_LINK,
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => true,
        ]
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
      
      tag_text(
        'a',
        'patreon.com/JohnElliotV',
        [
          'href' => 'https://www.patreon.com/JohnElliotV',
          'target' => '_blank',
          'rel' => 'follow',
          'title' => TITLE_BLOG_PATREON,
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => false,
        ]
      );

      out_text( "\n\n" );
      
      tag_text(
        'a',
        'Silly Job Title',
        [
          'href' => 'https://www.inthelabwithjayjay.com/in-the-lab/#silly-job-title',
          'target' => '_blank',
          'rel' => 'follow',
          'title' => 'Click here to read about the silly job title.',
          MUD_HTML_OPT_SPACE => false,
          MUD_HTML_OPT_BREAK => false,
        ]
      );

      out_text( ": ..." );

      out_text( "\n\nIn this video I ...\n\n" );

      out_text( TAGLINE_THANKS );

      out_text( "\n\n" );

      mud_html_set_opt( MUD_HTML_OPT_SPACE, false );

      tag_bare( 'hr' );

      mud_html_set_opt( MUD_HTML_OPT_BREAK, true );

      out_text( "Following is a list of products I use which may appear in my videos. " );
      out_text( "Clicking through on these links before purchasing from Amazon, eBay, or AliExpress is a great way " );
      out_text( "to support the channel at no cost to you. Thanks!\n" );

      tag_open( 'table', [ 'class' => 'table equipment' ] );

        tag_open( 'body' );

          foreach ( $equipment_list as $equipment ) {

            $row_number++;

            $thumb = $equipment->get_equipment_icon()->get_public_url();
            $product = $equipment->get_equipment_name();
            $link = $equipment->get_short_link();
            $notes = $equipment->get_sixsigma_url();

            tag_open( 'tr' );

              tag_open( 'td', [ 'class' => 'product' ] );

                tag_open(
                  'a',
                  [
                    'href' => $link,
                    'title' => mud_format_string( TITLE_TEMPLATE_BLOG_PRODUCT, [ 'product' => $product ] ),
                    'target' => '_blank',
                    'rel' => 'follow',
                  ]
                );

                  tag_text(
                    'span',
                    $product,
                    [
                      'class' => 'product-name',
                      //'style' => 'font-size:2rem;',
                    ]
                  );

                  tag_bare(
                    'img',
                    [
                      'class' => 'thumb',
                      'src' => $thumb,
                      'alt' => 'This is an image of the product.',
                      //'style' => 'max-height:400px',
                      'loading' => 'lazy',
                    ]
                  );

                tag_shut( 'a' );

                if ( $notes ) {

                  tag_open(
                    'a',
                    [
                      'class' => 'notes',
                      'href' => $notes,
                      'title' => mud_format_string( TITLE_TEMPLATE_BLOG_PRODUCT_NOTES, [ 'product' => $product ] ),
                      'target' => '_blank',
                      'rel' => 'follow',
                    ]
                  );

                    out_text( 'notes' );

                  tag_shut( 'a' );

                }

              tag_shut( 'td' );

            tag_shut( 'tr' );

          }

        tag_shut( 'body' );

      tag_shut( 'table' );

      out_text( "\n\nLet's go shopping!" );

    nip_done( $html, $echo = true );

  tag_shut( 'textarea' );

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

            $adjust = 4;
            $count += count( $purchase_list );

          }
          else {

            $adjust = 3;

          }

          $count = $count + $adjust;

          if ( count( $affiliate_link_list ) ) {

            $img_url = $equipment->get_equipment_icon()->get_auto_url();
            $equipment_text_html = henc( $equipment->get_equipment_name() );

            $id = $equipment->get_equipment_id();

            $short_link = $equipment->get_short_link();

            tag_open( 'tr', [ 'class' => "spacer row-$row_number" ] );

              tag_bare( 'td', [ 'colspan' => 7 ] );

            tag_shut( 'tr' );

            tag_open( 'tr' );

              tag_open( 'td', [ 'class' => 'equipment img', 'rowspan' => $count ] );

                tag_open(
                  'a',
                  [
                    'href' => url_base() . '/equipment.php#' . $id,
                    'class' => 'internal equipment-link',
                    'rel' => 'follow',
                    'title' => TITLE_LINK_ITEM,
                  ]
                );

                  tag_html( 'div', $equipment_text_html );

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

                  out_html( $equipment->get_first_purchase_date()->to_html() );

                tag_shut( 'div' );

                tag_open( 'div' );

                  tag_text(
                    'a',
                    $short_link,
                    [
                      'href' => $short_link,
                      'class' => 'external',
                      'target' => '_blank',
                      'rel' => 'noopener follow',
                      'title' => TITLE_LINK_SHORT,
                    ]
                  );

                tag_shut( 'div' );

                if ( is_dev() ) {

                  tag_bare( 'hr' );

                  foreach ( get_list( Affiliate::class ) as $affiliate ) {

                    $href = $affiliate->get_search_url( $equipment->get_equipment_name()->to_string() );
                    $text = $affiliate->get_affiliate_name()->to_string();

                    tag_open( 'div' );

                      tag_text(
                        'a',
                        $text,
                        [
                          'href' => $href,
                          'class' => 'external',
                          'target' => '_blank',
                          // 2024-07-04 jj5 - OLD: I don't think this was working? it's not important anyway...
                          //'target' => 'search',
                          'rel' => 'noopener follow',
                          'title' => TITLE_SEARCH_AFFILIATE,
                        ]
                      );

                    tag_shut( 'div' );

                  }
                }

              tag_shut( 'td' );

              tag_open( 'td', [ 'colspan' => 7, 'class' => 'equipment', 'style' => 'height:20px' ] );

                tag_open( 'h2', [ 'id' => $id ] );

                  out_html( $equipment_text_html );

                tag_shut( 'h2' );

                $link_list = $equipment->get_category_list();
                $manufacturer = $equipment->get_equipment_info()->get_manufacturer_name();

                if ( ! $manufacturer->is_null() ) { array_unshift( $link_list, $manufacturer ); }

                $link_number = 0;

                foreach ( $link_list as $link ) {

                  $link_number++;

                  if ( $link_number !== 1 ) { out_text( ' | ' ); }

                  if ( is_a( $link, Category::class ) ) {

                    tag_text(
                      'a',
                      $link,
                      [
                        'href' => url_base() . '/category.php/' . $link->get_category_id(),
                        'class' => 'internal',
                        'rel' => 'follow',
                        'title' => TITLE_LINK_CATEGORY_SELECTION,
                      ]
                    );

                  }
                  else {

                    tag_text(
                      'a',
                      $link,
                      [
                        'href' => url_base() . '/manufacturer.php/' . $link->get_manufacturer_id(),
                        'class' => 'internal',
                        'rel' => 'follow',
                        'title' => TITLE_LINK_MANUFACTURER_SELECTION,
                      ]
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

              $text = $affiliate_link->get_item_price()->to_string();

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

                tag_html( 'td', $item_options_html, [ 'class' => 'item_options' ] );

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

                    tag_text(
                      'a',
                      'notes',
                      [
                        'href' => $notes_url,
                        'class' => 'external',
                        'target' => '_blank',
                        'rel' => 'noopener follow',
                        'title' => TITLE_LINK_SIXSIGMA,
                      ]
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
                          'href' => "#$id",
                          'class' => 'internal',
                          'title' => TITLE_LINK_SEE_ALSO,
                        ]
                      );

                    tag_shut( 'li' );

                  }

                tag_shut( 'ul' );

              }

              $web_link_list = $equipment->get_web_link_list();

              // 2024-01-18 jj5 - I'm gonna leave this out for now, less is more.
              //$web_link_list[] = $equipment->get_search_link();

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

              tag_text( 'th', 'Notes' );

            tag_shut( 'tr' );

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

              $number = NUMBER_MAP[ $number ] ?? $number;

              $options_html = $purchase->get_order_options()->to_html();

              $href = '#' . $purchase->get_parent()->get_equipment_id();

              $vendor_url = $purchase->get_vendor_url();

              if ( ! $vendor_url->is_null() ) { $href = $vendor_url->to_html(); }

              $each = $number === 1 ? '' : 'each';
              $plus = $shipping->get_value() > 0 ? 'and' : 'plus';

              $order_url = $purchase->get_order_url()->to_string();
              $order_id = $purchase->get_order_id()->to_string();

              // 2024-01-27 jj5 - TODO: review this tool tip, it's not very good

              $order_item_name = $purchase->get_order_item_name()->to_string();

              tag_open( 'tr', [ 'style' => 'height:20px' ] );

                tag_html( 'td', "$vendor_html:", [ 'class' => 'vendor' ] );

                tag_html( 'td', "$subtotal_html", [ 'class' => 'subtotal price' ] );

                tag_html( 'td', "$ancillary_charges_html", [ 'class' => 'ancillary price' ] );

                tag_open( 'td' );

                  out_text( 'I purchased ' );

                  tag_open(
                    'a',
                    [
                      'href' => $href,
                      'class' => 'external',
                      'target' => '_blank',
                      'rel' => 'noopener follow',
                      'title' => $order_item_name,
                    ]
                  );

                    out_text( "$number of these" );

                  tag_shut( 'a' );

                  out_text( " on $date for $price $each" );

                  if ( $shipping->get_value() > 0 ) {

                    out_text( " plus shipping of $shipping" );

                  }
                  else {

                    out_text( " with free shipping" );

                  }

                  if ( $tax->get_value() > 0 ) {

                    out_text( " $plus tax of $tax" );

                  }

                  if ( $discount->get_value() > 0 ) {

                    out_text( " and a discount of $discount" );

                  }

                  out_text( " for a total of $total." );

                  if ( is_dev() ) {

                    tag_open(
                      'a',
                      [
                        'href' => $order_url,
                        'class' => 'external',
                        'target' => '_blank',
                        'rel' => 'noopener follow',
                        'title' => TITLE_LINK_ORDER,
                      ]
                    );

                      out_text( $order_id );

                    tag_shut( 'a' );

                  }

                tag_shut( 'td' );

                tag_html( 'td', $options_html );

                tag_open( 'td' );

                tag_shut( 'td' );

              tag_shut( 'tr' );

            }
          }
        }

      tag_shut( 'tbody' );

    tag_shut( 'table' );

  tag_shut( 'div' );

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
                  'target' => '_blank',
                  'rel' => 'noopener follow',
                  'title' => TITLE_LINK_PURCHASED,
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

function render_equipment_options( int $count ) {

  tag_open( 'div', [ 'id' => 'options' ] );

    tag_open( 'p' );

      out_text( 'Prices in: ' );

      tag_text(
        'a',
        'USD',
        [
          'href' => '?' . get_link( [ 'currency' => 'USD' ] ) . '#options',
          'class' => 'internal',
          'title' => TITLE_PRICE_USD,
          'rel' => 'nofollow',
        ]
      );

      out_text( ' | ' );

      tag_text(
        'a',
        'AUD',
        [
          'href' => '?' . get_link( [ 'currency' => 'AUD' ] ) . '#options',
          'class' => 'internal',
          'title' => TITLE_PRICE_AUD,
          'rel' => 'nofollow',
        ]
      );

      out_text( ' | ' );

      tag_text(
        'a',
        'default',
        [
          'href' => '?' . get_link_without( 'currency' ) . '#options',
          'class' => 'internal',
          'title' => TITLE_PRICE_DEFAULT,
          'rel' => 'nofollow',
        ]
      );

      if ( $count > 1 ) {

        out_html( ' &mdash; ' );

        out_text( 'Sort: ' );

        tag_text(
          'a',
          'cheap first',
          [
            'href' => '?' . get_link( [ 'sort' => 'cheap-first' ] ) . '#options',
            'class' => 'internal',
            'title' => TITLE_SORT_CHEAP_FIRST,
            'rel' => 'nofollow',
          ]
        );

        out_text( ' | ' );

        tag_text(
          'a',
          'expensive first',
          [
            'href' => '?' . get_link( [ 'sort' => 'expensive-first' ] ) . '#options',
            'class' => 'internal',
            'title' => TITLE_SORT_EXPENSIVE_FIRST,
            'rel' => 'nofollow',
          ]
        );

        out_text( ' | ' );

        tag_text(
          'a',
          'newest first',
          [
            'href' => '?' . get_link( [ 'sort' => 'new-first' ] ) . '#options',
            'class' => 'internal',
            'title' => TITLE_SORT_NEW_FIRST,
            'rel' => 'nofollow',
          ]
        );

        out_text( ' | ' );

        tag_text(
          'a',
          'oldest first',
          [
            'href' => '?' . get_link( [ 'sort' => 'old-first' ] ) . '#options',
            'class' => 'internal',
            'title' => TITLE_SORT_OLD_FIRST,
            'rel' => 'nofollow',
          ]
        );

        out_text( ' | ' );

        tag_text(
          'a',
          'random',
          [
            'href' => '?' . get_link( [ 'sort' => 'random' ] ) . '#options',
            'class' => 'internal',
            'title' => TITLE_SORT_RANDOM,
            'rel' => 'nofollow',
          ]
        );

        out_text( ' | ' );

        tag_text(
          'a',
          'default',
          [
            'href' => '?' . get_link_without( 'sort' ) . '#options',
            'class' => 'internal',
            'title' => TITLE_SORT_DEFAULT,
            'rel' => 'nofollow',
          ]
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
