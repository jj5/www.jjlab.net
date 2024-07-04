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

    tag_text( 'h' . $heading_level, 'Blog', [ 'id' => 'blog-summary' ] );

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

    tag_text( 'h' . ( $heading_level + 1 ), 'Sitemap.xml', [ 'id' => 'sitemap.xml' ] );

    tag_open( 'p' );

      out_text( 'This website has a sitemap.xml file which is ' );

      tag_text(
        'a',
        'here',
        [
          'href' => url_base() . '/sitemap.php',
          'class' => 'internal',
          'title' => TITLE_LINK_SITEMAP_XML,
        ]
      );

      out_text( '.' );

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

function render_section_summary_thanks( int $heading_level = 2 ) {

  tag_open( 'section' );

    tag_text( 'h' . $heading_level, 'Thanks!', [ 'id' => 'thanks' ] );

    tag_open( 'p' );

      out_text( 'Thanks for checking out the show! If you would like to help me out there are various ways you can' );

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
