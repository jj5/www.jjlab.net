<?php

require_once __DIR__ . '/view/milligram.php';
//require_once __DIR__ . '/view/initial.php';

function render_maxitronix_kit_list() {

  $list = app_stash()->get_list( MaxitronixKit::class );

  tag_open( 'ul' );

    foreach ( $list as $kit ) {

      tag_open( 'li' );

        render_link_internal(
           $kit->get_name(),
           $kit->get_link(),
           $kit->get_title(),
        );

      tag_shut( 'li' );

    }

  tag_shut( 'ul' );

}


function render_section_about_blog( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( "h{$heading_level}", 'John\'s Blog', [ 'id' => 'blog-summary' ] );

    tag_text( 'p', 'I usually write up show notes on my blog, which is over here:' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      render_link_external(
        'https://blog.jj5.net/',
        'https://blog.jj5.net/',
        TITLE_BLOG,
      );

    tag_shut( 'p' );

    tag_text( 'p', 'Anyone can read the blog but you need an account to comment. ' .
      'Accounts are available to my Patreon supporters.' );

    tag_text( 'p', 'If you want an account on the blog you can subscribe on Patreon: ' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      render_link_external(
        'patreon.com/JohnElliotV',
        'https://www.patreon.com/JohnElliotV',
        TITLE_PATREON,
      );

    tag_shut( 'p' );

  tag_shut( 'section' );

}

function render_section_about_wiki( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( "h{$heading_level}", 'ITL Wiki', [ 'id' => 'wiki-summary' ] );

    tag_text( 'p', 'The show has its own wiki, known as the ITL Wiki, which is over here:' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      render_link_internal(
        'inthelabwithjayjay.com/wiki',
        'https://www.inthelabwithjayjay.com/wiki/',
        TITLE_WIKI,
      );

    tag_shut( 'p' );

    tag_text( 'p', 'We can use the ITL Wiki to document our projects. ' .
      'Some pages on the wiki are only available to my Patreon supporters.' );

    tag_text( 'p', 'If you want an account on the wiki you can subscribe on Patreon: ' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      render_link_external(
        'patreon.com/JohnElliotV',
        'https://www.patreon.com/JohnElliotV',
        TITLE_PATREON,
      );

    tag_shut( 'p' );

  tag_shut( 'section' );

}

function render_section_about_colophon( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( "h{$heading_level}", 'Colophon', [ 'id' => 'colophon' ] );

    tag_text( 'p', 'Here are some notes about how this website is made.' );

  tag_shut( 'section' );

  tag_open( 'section' );

    tag_text( 'h' . ( $heading_level + 1 ), 'Logo', [ 'id' => 'about-logo' ] );

    tag_bare(
      'img',
      [
        'src'   => LOGO_URL,
        'class' => 'logo',
        'style' => 'width:70px; height:70px; float:right; margin: 0px 10px;',
        'alt'   => ALT_LOGO,
        'title' => ALT_LOGO,
      ]
    );

    tag_open( 'p' );

      out_text( 'The show\'s logo (shown right) is a version of the ' );

      render_link_external(
        'Hacker Emblem',
        'http://www.catb.org/hacker-emblem/',
        TITLE_LINK_HACKER_EMBLEM,
      );

      out_text( '. As all good nerds will know the ' );

      render_link_external(
        'glider',
        'https://en.wikipedia.org/wiki/Glider_(Conway%27s_Game_of_Life)',
        TITLE_LINK_GAME_OF_LIFE,
      );

      out_text( ' which Eric S. Raymond chose for the hacker emblem can be in any of four different states, so I ' );
      out_text( 'picked an alternative state for the glider to be in for the show\'s logo. The state I picked looks ' );
      out_text( 'a little bit like a "J", for "Jay Jay", don\'t you think? :)' );

    tag_shut( 'p' );

  tag_shut( 'section' );

  tag_open( 'section' );

    tag_text( 'h' . ( $heading_level + 1 ), 'Source Code', [ 'id' => 'source-code' ] );

    tag_open( 'p' );

      out_text( 'The source code for this website is now available on GitHub:' );

    tag_shut( 'p' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      render_link_external(
        'github.com/jj5/www.jjlab.net',
        'https://github.com/jj5/www.jjlab.net',
        TITLE_LINK_GITHUB_SOURCE,
      );

    tag_shut( 'p' );

  tag_shut( 'section' );

  tag_open( 'section' );

    tag_text( 'h' . ( $heading_level + 1 ), 'Software Version', [ 'id' => 'software-version' ] );

    tag_open( 'p' );

      out_text( 'This website is running on the following software:' );

    tag_shut( 'p' );

    tag_open( 'table' );

      tag_open( 'thead' );

        tag_open( 'tr' );

          tag_text( 'th', 'Software' );

          tag_text( 'th', 'Version' );

        tag_shut( 'tr' );

      tag_shut( 'thead' );

      $apache_version_spec = $_SERVER[ 'SERVER_SOFTWARE' ] ?? '';
      $apache_version = preg_match( '/Apache\/([0-9.]+)/', $apache_version_spec, $matches ) ? $matches[ 1 ] : '';

      $debian_version_file = '/etc/debian_version';
      $debian_version = file_exists( $debian_version_file ) ? file_get_contents( $debian_version_file ) : '';

      $software = [
        JJLAB_NAME  => app_get_software( JJLAB_NAME,    JJLAB_VERSION,    'https://github.com/jj5/www.jjlab.net'  ),
        'Mudball'   => app_get_software( MUDBALL_NAME,  MUDBALL_VERSION,  'https://github.com/jj5/mudball'        ),
        'PHP'       => app_get_software( 'PHP',         PHP_VERSION,      'https://www.php.net/'                  ),
        'Apache'    => app_get_software( 'Apache',      $apache_version,  'https://www.apache.org/'               ),
        'Debian'    => app_get_software( 'Debian',      $debian_version,  'https://www.debian.org/'               ),
      ];

      tag_open( 'tbody' );

        foreach ( $software as $code => $version ) {

          tag_open( 'tr' );

            tag_open( 'td', [ 'class' => 'right' ] );

              render_link_external(
                $code,
                $version[ 'link' ],
                mud_format_string( TITLE_TEMPLATE_LINK_SOFTWARE, [ 'name' => $version[ 'name' ] ] )
              );

            tag_shut( 'td' );

            tag_text( 'td', $version[ 'version' ], [ 'class' => 'right' ] );

          tag_shut( 'tr' );

        }

      tag_shut( 'tbody' );

    tag_shut( 'table' );

  tag_shut( 'section' );

  tag_open( 'section' );

    tag_text( 'h' . ( $heading_level + 1 ), 'XML Files', [ 'id' => 'xml-files' ] );

    tag_open( 'p' );

      out_text( 'This website has a ' );

      render_link_internal(
        'sitemap.xml',
        url_base() . '/sitemap.php#heading',
        TITLE_LINK_SITEMAP_XML,
      );

      out_text( ' file and a ' );

      render_link_internal(
        'rss.xml',
        url_base() . '/feed.php',
        TITLE_LINK_RSS_FEED,
      );

      out_text( ' file.' );

    tag_shut( 'p' );

  tag_shut( 'section' );

  tag_open( 'section' );

    tag_text( 'h' . ( $heading_level + 1 ), 'Text Files', [ 'id' => 'text-files' ] );

    tag_open( 'p' );

      out_text( 'This website has a ' );

      render_link_internal_root(
        'humans.txt',
        '/humans.txt',
        TITLE_LINK_HUMANS_TXT,
      );

      out_text( ' file and a ' );

      render_link_internal_root(
        'robots.txt',
        '/robots.txt',
        TITLE_LINK_ROBOTS_TXT,
      );

      out_text( ' file.' );

    tag_shut( 'p' );

  tag_shut( 'section' );

}

function app_get_software( $name, $version, $link ) {

  return [
    'name' => $name,
    'version' => $version,
    'link' => $link,
  ];

}

function render_section_about_secrets( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( "h{$heading_level}", 'Secret Links', [ 'id' => 'secret-links' ] );

    tag_open( 'p' );

      out_text( 'Can you keep a secret? There are two handy pages I made for my own use. I don\'t advertise them because they use ' );

      out_text( 'massive HTML tables' );

      out_text( ' so the pages aren\'t responsive (i.e. they don\'t look good on mobile devices). But if you\'re brave you can find them here:' );

    tag_shut( 'p' );

    tag_open( 'ul' );

      tag_open( 'li' );

        render_link_internal(
          'Videos Index',
          url_base() . '/videos.php#videos',
          TITLE_VIDEO_INDEX,
        );

      tag_shut( 'li' );

      tag_open( 'li' );

        render_link_internal(
          'Books Index',
          url_base() . '/books.php#books',
          TITLE_BOOK_INDEX,
        );

      tag_shut( 'li' );

    tag_shut( 'ul' );

    tag_open( 'p' );

      out_text( 'I also have some notes about YouTube hacks over here: ' );

      render_link_internal(
        'YouTube Hacks',
        url_base() . '/youtube-hacks.php#heading',
        TITLE_YOUTUBE_HACKS,
      );

      out_text( '.' );

    tag_shut( 'p' );

  tag_shut( 'section' );

}

function render_section_about_jjcode( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( "h{$heading_level}", 'New JJCODE', [ 'id' => 'jjcode' ] );

    tag_open( 'p' );

      out_text( 'This is a facility for John. I use it to generate the five digit codes used in the short links. ' );
      out_text( 'Usually this is an automated process, but sometimes I set it up manually.' );

    tag_shut( 'p' );

    tag_open( 'p' );

      $jjcode = itl()->get_new_jjcode();

      out_text( "Here is a new JJCODE: $jjcode" );

    tag_shut( 'p' );

  tag_shut( 'section' );

}

function render_section_about_shortcuts( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( "h{$heading_level}", 'Shortcut Keys', [ 'id' => 'shortcuts' ] );

    tag_open( 'p' );

      out_text( 'There are some hotkeys you can use to speed your navigation. Just press the key for the page you want. ' );
      out_text( "I added this support for hotkeys because I use this website quite a lot while I'm working on the show. " );
      out_text( "It's mostly just here for my use but it would be cool if someone else found it useful too! " );
      out_text( "I'm not sure if it will work on all browsers, but it works on recent versions of Firefox and Chromium. " );
      out_text( "The main hotkey you have to remember is '?' for this section of this page, then you can take it from there." );

    tag_shut( 'p' );

    tag_open( 'table', [ 'class' => 'sortable' ] );

      tag_open( 'thead' );

        tag_open( 'tr' );

          tag_text( 'th', '#' );
          tag_text( 'th', 'Hotkey' );
          tag_text( 'th', 'Page' );
          tag_text( 'th', 'Description' );

        tag_shut( 'tr' );

      tag_shut( 'thead' );

      tag_open( 'tbody' );

        $main_channel   = '/channel.php/@InTheLabWithJayJay#heading';
        $extra_channel  = '/channel.php/@ElliotsExtras#heading';
        $mini_projects  = '/feature.php/mini-project#heading';
        $maxitronix     = '/feature.php/maxitronix#heading';

        $title_jjcode = 'This is a facility for John.';

        // 2025-05-09 jj5 - NOTE: see src/web/res/script/script.js for the shortcut key definitions

        render_shortcut( '?', 'Shortcuts',          '/about.php#shortcuts',           TITLE_ABOUT_SHORTCUTS   );
        render_shortcut( '0', 'Return to Top',      '#',                              TITLE_TOP               );
        render_shortcut( '.', 'Table of Contents',  '#contents',                      TITLE_TOC               );
        render_shortcut( 'H', 'Homepage',           '/',                              TITLE_HOMEPAGE          );
        render_shortcut( 'W', 'ITL Wiki',           '/wiki/',                         TITLE_ITL_WIKI          );
        render_shortcut( 'L', 'Latest Video',       '/#latest',                       TITLE_LATEST            );
        render_shortcut( '!', 'Lab Costume',        '/#costume',                      TITLE_COSTUME           );
        render_shortcut( 'I', 'Silly Job Title',    '/#silly-job-title',              TITLE_SILLY_JOB_TITLE   );
        render_shortcut( 'M', 'Main Channel',       $main_channel,                    TITLE_CHANNEL_MAIN      );
        render_shortcut( '2', '2nd Channel',        $extra_channel,                   TITLE_CHANNEL_EXTRA     );
        render_shortcut( '5', 'New JJCODE',         '/jjcode.php#heading',            $title_jjcode           );
        render_shortcut( 'S', 'Sponsors',           '/sponsor.php#heading',           TITLE_SPONSOR           );
        render_shortcut( 'E', 'Equipment',          '/equipment.php#heading',         TITLE_EQUIPMENT         );
        render_shortcut( 'A', 'About the Website',  '/about.php#heading',             TITLE_ABOUT             );
        render_shortcut( '3', 'YouTube Hacks',      '/youtube-hacks.php#heading',     TITLE_YOUTUBE_HACKS     );
        render_shortcut( 'U', 'Support the Show!',  '/support.php#heading',           TITLE_SUPPORT           );
        render_shortcut( 'C', 'Contact Info',       '/contact.php#heading',           TITLE_CONTACT           );
        render_shortcut( 'N', 'Statistics',         '/stats.php#heading',             TITLE_STATS             );
        render_shortcut( 'J', 'Mini Projects',      $mini_projects,                   TITLE_SHOW_MINI_PROJECT );
        render_shortcut( 'K', 'Maxitronix Kits',    $maxitronix,                      TITLE_SHOW_MAXITRONIX   );
        render_shortcut( 'V', 'Video Index',        '/videos.php#videos',             TITLE_VIDEO_INDEX       );
        render_shortcut( 'B', 'Book Index',         '/books.php#books',               TITLE_BOOK_INDEX        );
        render_shortcut( 'X', 'sitemap.xml',        '/sitemap.php',                   TITLE_SITEMAP_XML       );
        render_shortcut( 'R', 'RSS Feed',           '/feed.php',                      TITLE_RSS_FEED          );
        render_shortcut( 'T', 'Blog Template',      '/blog-template.php#heading',     TITLE_BLOG_TEMPLATE     );
        render_shortcut( 'Y', 'YouTube Template',   '/youtube-template.php#heading',  TITLE_YOUTUBE_TEMPLATE  );
        render_shortcut( 'Z', 'Software Version',   '/about.php#software-version',    TITLE_SOFTWARE_VERSION  );
        render_shortcut( 'D', 'Debug',              '/debug.php',                     TITLE_DEBUG             );

      tag_shut( 'tbody' );

    tag_shut( 'table' );

  tag_shut( 'section' );

}

function render_shortcut( string $key, string $page, string $link, string $title ) {

  static $counter = 0;

  $counter++;

  tag_open( 'tr' );

    tag_text( 'td', $counter, [ 'class' => 'right' ] );

    tag_open( 'td', [ 'style' => 'text-align:center;' ] );

      out_text( $key );

    tag_shut( 'td' );

    tag_open( 'td' );

      if ( $page === 'Debug' ) {

        render_link_internal_nofollow( $page, url_base() . $link, $title );

      }
      else {

        render_link_internal( $page, url_base() . $link, $title );

      }

    tag_shut( 'td' );

    tag_open( 'td' );

      out_text( $title );

    tag_shut( 'td' );

  tag_shut( 'tr' );

}
