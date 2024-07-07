<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_about_main();

    default :

      return default_redirect( url_base() . '/about.php' );

  }
}

function render_about_main() {

  render_head( 'About the Website' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "About the Website" );
        
        tag_text( 'p', 'This website is for the video blog of John Elliot V who is affectionately known as Jay Jay.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_section_about_contact();

    //render_section_summary_channels();

    render_section_summary_blog();

    render_section_about_announcements();

    render_section_about_colophon();

    render_section_about_secrets();

    render_section_about_shortcuts();

    render_section_summary_thanks();

  render_foot();

}

function render_section_summary_channels( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( 'h' . $heading_level, 'Channels', [ 'id' => 'channel-summary' ] );

    tag_text( 'p', 'The show is published across two YouTube channels:' );

    tag_open( 'ul' );

      tag_open( 'li' );

        tag_text(
          'a',
          'Main Channel',
          [
            'href' => url_base() . '/channel.php/@InTheLabWithJayJay',
            'class' => 'internal',
            'rel' => 'follow',
            'title' => TITLE_CHANNEL_MAIN,
          ]
        );

        out_text( ': ' );

        tag_text(
          'a',
          'youtube.com/@InTheLabWithJayJay',
          [
            'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => TITLE_CHANNEL_MAIN,
          ]
        );

      tag_shut( 'li' );

      tag_open( 'li' );

        tag_text(
          'a',
          '2nd Channel',
          [
            'href' => url_base() . '/channel.php/@ElliotsExtras',
            'class' => 'internal',
            'rel' => 'follow',
            'title' => TITLE_CHANNEL_EXTRA,
          ]
        );

        out_text( ': ' );

        tag_text(
          'a',
          'youtube.com/@ElliotsExtras',
          [
            'href' => 'https://www.youtube.com/@ElliotsExtras',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => TITLE_CHANNEL_MAIN,
          ]
        );

      tag_shut( 'li' );

    tag_shut( 'ul' );

  tag_shut( 'section' );

}

function render_section_summary_blog( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( 'h' . $heading_level, 'John\'s Blog', [ 'id' => 'blog-summary' ] );

    tag_text( 'p', 'I usually write up show notes on my blog, which is over here:' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      tag_text(
        'a',
        'blog.jj5.net',
        [
          'href' => 'https://blog.jj5.net/',
          'class' => 'external',
          'target' => '_blank',
          'rel' => 'noopener follow',
          'title' => TITLE_BLOG,
        ]
      );

    tag_shut( 'p' );

  tag_shut( 'section' );

}

function render_section_about_colophon( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( 'h' . $heading_level, 'Colophon', [ 'id' => 'colophon' ] );

    tag_text( 'p', 'Here are some notes about how this website is made.' );

  tag_shut( 'section' );

  tag_open( 'section' );

    tag_text( 'h' . ( $heading_level + 1 ), 'Logo', [ 'id' => 'about-logo' ] );

    tag_bare(
      'img',
      [
        'src'   => LOGO_URL,
        'class' => 'logo',
        'style' => 'width:50px; height:50px; float:right; margin:6px 20px;',
        'alt'   => ALT_LOGO,
        'title' => ALT_LOGO,
      ]
    );

    tag_open( 'p' );

      out_text( 'The show\'s logo (shown right) is a version of the ' );

      tag_text(
        'a',
        'Hacker Emblem',
        [
          'href' => 'http://www.catb.org/hacker-emblem/',
          'class' => 'external',
          'target' => '_blank',
          'rel' => 'noopener follow',
          'title' => TITLE_LINK_HACKER_EMBLEM,
        ]
      );

      out_text( '. As all good nerds will know the ' );

      tag_text(
        'a',
        'glider',
        [
          'href' => 'https://en.wikipedia.org/wiki/Glider_(Conway%27s_Game_of_Life)',
          'class' => 'external',
          'target' => '_blank',
          'rel' => 'noopener follow',
          'title' => TITLE_LINK_GAME_OF_LIFE,
        ]
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

      tag_text(
        'a',
        'github.com/jj5/www.jjlab.net',
        [
          'href' => 'https://github.com/jj5/www.jjlab.net',
          'class' => 'external',
          'target' => '_blank',
          'rel' => 'noopener follow',
          'title' => TITLE_LINK_GITHUB_SOURCE,
        ]
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

              tag_text(
                'a',
                $code,
                [
                  'href' => $version[ 'link' ],
                  'class' => 'external',
                  'target' => '_blank',
                  'rel' => 'noopener follow',
                  'title' => mud_format_string( TITLE_TEMPLATE_LINK_SOFTWARE, [ 'name' => $version[ 'name' ] ] )
                ]
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

      tag_text(
        'a',
        'sitemap.xml',
        [
          'href' => url_base() . '/sitemap.php',
          'class' => 'internal',
          'title' => TITLE_LINK_SITEMAP_XML,
        ]
      );

      out_text( ' file and a ' );

      tag_text(
        'a',
        'rss.xml',
        [
          'href' => url_base() . '/feed.php',
          'class' => 'internal',
          'title' => TITLE_LINK_RSS_FEED,
        ]
      );

      out_text( ' file.' );

    tag_shut( 'p' );

  tag_shut( 'section' );

  tag_open( 'section' );

    tag_text( 'h' . ( $heading_level + 1 ), 'Text Files', [ 'id' => 'text-files' ] );

    tag_open( 'p' );

      out_text( 'This website has a ' );

      tag_text(
        'a',
        'humans.txt',
        [
          'href' => '/humans.txt',
          'class' => 'internal',
          'rel' => 'follow',
          'title' => TITLE_LINK_HUMANS_TXT,
        ]
      );

      out_text( ' file and a ' );

      tag_text(
        'a',
        'robots.txt',
        [
          'href' => '/robots.txt',
          'class' => 'internal',
          'rel' => 'follow',
          'title' => TITLE_LINK_ROBOTS_TXT,
        ]
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

    tag_text( 'h' . $heading_level, 'Secret Links', [ 'id' => 'secret-links' ] );

    tag_open( 'p' );

      out_text( 'Can you keep a secret? There are two handy pages I made for my own use. I don\'t advertise them because they use ' );

      out_text( 'massive HTML tables' );

      out_text( ' so the pages aren\'t responsive (i.e. they don\'t look good on mobilde devices). But if you\'re brave you can find them here:' );

    tag_shut( 'p' );

    tag_open( 'ul' );

      tag_open( 'li' );

        tag_text(
          'a',
          'Videos Index',
          [
            'href' => url_base() . '/videos.php',
            'class' => 'internal',
            'title' => TITLE_VIDEO_INDEX,
          ]
        );

      tag_shut( 'li' );

      tag_open( 'li' );

        tag_text(
          'a',
          'Books Index',
          [
            'href' => url_base() . '/books.php',
            'class' => 'internal',
            'title' => TITLE_BOOK_INDEX,
          ]
        );

      tag_shut( 'li' );

    tag_shut( 'ul' );

  tag_shut( 'section' );

}

function render_section_about_shortcuts( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( 'h' . $heading_level, 'Shortcut Keys', [ 'id' => 'shortcuts' ] );

    tag_open( 'p' );

      out_text( 'There are some hotkeys you can use to speed your navigation. Just press the key for the page you want.' );

    tag_shut( 'p' );

    // 2024-07-05 jj5 - OLD: needed to resolve the error and remove this... it was a caching gremlin from CloudFront.
    /*
    tag_open( 'p' );

      out_text( 'NOTE: there seems to be an issue with this feature not working properly. I will get this fixed as soon as I can.' );

    tag_shut( 'p' );
    */

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

        $main_channel = '/channel.php/@InTheLabWithJayJay#heading';
        $extra_channel = '/channel.php/@ElliotsExtras#heading';
        $mini_projects = '/feature.php/mini-project#heading';
        $maxitronix = '/feature.php/maxitronix#heading';

        render_shortcut( '?', 'Shortcuts',          '/about.php#shortcuts',           TITLE_ABOUT_SHORTCUTS   );
        render_shortcut( '0', 'Return to Top',      '#',                              TITLE_TOP               );
        render_shortcut( '.', 'Table of Contents',  '#contents',                      TITLE_TOC               );
        render_shortcut( 'H', 'Homepage',           '/',                              TITLE_HOMEPAGE          );
        render_shortcut( 'L', 'Latest Video',       '/#latest',                       TITLE_LATEST            );
        render_shortcut( '!', 'Lab Costume',        '/#costume',                      TITLE_COSTUME           );
        render_shortcut( 'I', 'Silly Job Title',    '/#silly-job-title',              TITLE_SILLY_JOB_TITLE   );
        render_shortcut( 'M', 'Main Channel',       $main_channel,                    TITLE_CHANNEL_MAIN      );
        render_shortcut( '2', '2nd Channel',        $extra_channel,                   TITLE_CHANNEL_EXTRA     );
        render_shortcut( 'S', 'Sponsors',           '/sponsor.php#heading',           TITLE_SPONSOR           );
        render_shortcut( 'E', 'Equipment',          '/equipment.php#heading',         TITLE_EQUIPMENT         );
        render_shortcut( 'A', 'About the Website',  '/about.php#heading',             TITLE_ABOUT             );
        render_shortcut( 'U', 'Support the Show!',  '/support.php#heading',           TITLE_SUPPORT           );
        render_shortcut( 'C', 'Contact Info',       '/contact.php#heading',           TITLE_CONTACT           );
        render_shortcut( 'J', 'Mini Projects',      $mini_projects,                   TITLE_SHOW_MINI_PROJECT );
        render_shortcut( 'K', 'Maxitronix Kits',    $maxitronix,                      TITLE_SHOW_MAXITRONIX   );
        render_shortcut( 'V', 'Video Index',        '/videos.php#videos',             TITLE_VIDEO_INDEX       );
        render_shortcut( 'B', 'Book Index',         '/books.php#books',               TITLE_BOOK_INDEX        );
        render_shortcut( 'X', 'sitemap.xml',        '/sitemap.php',                   TITLE_SITEMAP_XML       );
        render_shortcut( 'R', 'RSS Feed',           '/feed.php',                      TITLE_RSS_FEED          );
        render_shortcut( 'T', 'Blog Template',      '/blog-template.php#heading',     TITLE_BLOG_TEMPLATE     );
        render_shortcut( 'Q', 'YouTube Template',   '/youtube-template.php#heading',  TITLE_YOUTUBE_TEMPLATE  );
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

      $rel = ( $page === 'Debug' ) ? 'nofollow' : 'follow';

      tag_text(
        'a',
        $page,
        [
          'href' => url_base() . $link,
          'class' => 'internal',
          'rel' => $rel,
          'title' => $title,
        ]
      );

    tag_shut( 'td' );

    tag_open( 'td' );

      out_text( $title );

    tag_shut( 'td' );

  tag_shut( 'tr' );

}

function render_section_summary_thanks( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( 'h' . $heading_level, 'Thanks!', [ 'id' => 'thanks' ] );

    tag_open( 'p' );

      out_text( 'Thanks for checking out the website! If you would like to help me out there are various ways you can ' );

      tag_text(
        'a',
        'support the show',
        [
          'href' => url_base() . '/support.php',
          'class' => 'internal',
          'title' => TITLE_SUPPORT,
        ]
      );

      out_text( '.' );

    tag_shut( 'p' );

  tag_shut( 'section' );

}
