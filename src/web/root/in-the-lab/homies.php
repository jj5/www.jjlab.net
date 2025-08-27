<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_homies_main();

    default :

      return default_redirect( url_base() . '/homies.php#heading' );

  }
}

function render_homies_main() {

  $title = 'Shoutout to My Homies!';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          out_text( "Not only am I a YouTube creator, I am also a YouTube viewer!" );

        tag_shut( 'p' );

        tag_open( 'p' );

          out_text( "On this page I let you know who I watch on YouTube and support on Patreon." );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'My Homies', [ 'id' => 'homies' ] );

      tag_open( 'p' );

        out_text(
          "Man, I love the long tail. There is so much interesting stuff on the web theses days, including on YouTube, " .
          "wouldn't you agree? On this page I wanted to let you know about some of the people who I follow. I can't list " .
          "everyone who I follow on YouTube, so the criteria for this list is whether I sponsor them on Patreon or not. " .
          "Yes, I do sponsor people on Patreon! "
        );

        render_link_external(
          "Don't you?",
          'https://www.patreon.com/JohnElliotV',
          TITLE_PATREON
        );

        out_text( ' :)' );

      tag_shut( 'p' );

      tag_open( 'table' );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Video Blogger' );
            tag_text( 'th', 'YouTube Channel' );
            tag_text( 'th', 'Patreon' );
            tag_text( 'th', 'Website' );
            tag_text( 'th', 'Notes' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        $counter = 1;
        $link_class = 'right';

        tag_open( 'tbody' );

          tag_open( 'tr' );
            tag_text( 'td', $counter++ );
            tag_text( 'td', 'Dave Jones on the EEVblog' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                '@EEVblog',
                'https://www.youtube.com/@EEVblog',
                'Click here to watch EEVblog on YouTube.',
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'EEVblog',
                'https://www.patreon.com/eevblog',
                'Click here to find EEVblog on Patreon.',
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'eevblog.com',
                'https://www.eevblog.com/',
                'Click here to visit the EEVblog website.',
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_internal(
                'note',
                '#dave-jones',
                'Click here to read my notes about Dave Jones.',
              );
            tag_shut( 'td' );
          tag_shut( 'tr' );

          tag_open( 'tr' );
            tag_text( 'td', $counter++ );
            tag_text( 'td', "Adrian Black on Adrian's Digital Basement" );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                '@AdriansDigitalBasement',
                'https://www.youtube.com/@AdriansDigitalBasement',
                "Click here to watch Adrian's Digital Basement on YouTube.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'AdriansDigitalBasement',
                'https://www.patreon.com/adriansdigitalbasement',
                "Click here to find Adrian's Digial Basement on Patreon.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'adriansbasement.com',
                'https://adriansbasement.com/',
                "Click here to visit the website for Adrian's Digital Basement.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_internal(
                'note',
                '#adrian-black',
                'Click here to read my notes about Adrian Black.',
              );
            tag_shut( 'td' );
          tag_shut( 'tr' );

          tag_open( 'tr' );
            tag_text( 'td', $counter++ );
            tag_text( 'td', "Richard on Learn Electronics Repair" );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                '@LearnElectronicsRepair',
                'https://www.youtube.com/@LearnElectronicsRepair',
                "Click here to watch Learn Electronics Repair on YouTube.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'LearnElectronicsRepair',
                'https://www.patreon.com/LearnElectronicsRepair',
                "Click here to find Learn Electronics Repair on Patreon.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'discord.com',
                'https://discord.com/channels/896427792751820842',
                'Click here to visit the Discord channel for Learn Electronics Repair.',
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
            tag_shut( 'td' );
          tag_shut( 'tr' );

          tag_open( 'tr' );
            tag_text( 'td', $counter++ );
            tag_text( 'td', "Paul Carlson on Mr Carlson's Lab" );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                '@MrCarlsonsLab',
                'https://www.youtube.com/@MrCarlsonsLab',
                "Click here to watch Mr Carlson's Lab on YouTube.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'MrCarlsonsLab',
                'https://www.patreon.com/MrCarlsonsLab',
                "Click here to find Mr Carlson's Lab on Patreon.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'mrcarlsonslab.com',
                'https://mrcarlsonslab.com/',
                "Click here to visit the website for Mr Carlson's Lab.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
            tag_shut( 'td' );
          tag_shut( 'tr' );

          tag_open( 'tr' );
            tag_text( 'td', $counter++ );
            tag_text( 'td', "Learning as a hobby" );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                '@learningasahobby790',
                'https://www.youtube.com/@learningasahobby790',
                "Click here to watch Learning as a hobby on YouTube.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'Learning as a hobby',
                'https://www.patreon.com/Learningasahobby',
                "Click here to find Learning as a hobby on Patreon.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
              render_link_external(
                'learningasahobby.com',
                'https://www.learningasahobby.com/',
                "Click here to visit the website for Learning as a hobby.",
              );
            tag_shut( 'td' );
            tag_open( 'td', [ 'class' => $link_class ] );
            tag_shut( 'td' );
          tag_shut( 'tr' );

        tag_shut( 'tbody' );

      tag_shut( 'table' );

      tag_open( 'p' );

        out_text( 'You can find this same list of video bloggers on my ' );

        render_link_external(
          'Patreon Recommendations',
          'https://www.patreon.com/JohnElliotV/recommendations',
          'Click here to see my Patreon Recommendations.'
        );

        out_text( ' page.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h2', 'Dave Jones on the EEVblog', [ 'id' => 'dave-jones' ] );

      tag_open( 'p' );

        out_text( "I " );

        render_link_external(
          'met Dave at ElectroneX',
          'https://blog.jj5.net/blog/2024/06/19/my-day-at-electronex-with-my-friend/',
          'Click here to read about when I met Dave Jones at ElectroneX in 2024.'
        );

        out_text( " and he was cool enough to " );

        render_link_external(
          'plug my channel on X',
          'https://x.com/eevblog/status/1803278981858509163',
          "Click here to see Dave Jones plug my channel."
        );

        out_text( '.' );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( "Dave runs the " );

        render_link_external(
          'EEVblog Forum',
          'https://www.eevblog.com/forum/',
          'Click here to visit the EEVblog Forum.'
        );

        out_text( " which is an excellent resource, check it out!" );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( "Dave makes a line of multimeters. I am saving my pennies so I can get the full set! " );

        out_text( "Here are the multimeters Dave makes:" );

      tag_shut( 'p' );

      tag_open( 'ul' );

        tag_open( 'li' );

          render_link_external(
            'EEVblog 121GW Multimeter',
            'https://eevblog.store/products/121gw-multimeter',
            'Click here to buy the EEVblog 121GW Multimeter.'
          );

          out_text( ' (AU$325.00)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_external(
            'EEVblog BM786 Multimeter',
            'https://eevblog.store/products/eevblog-bm786-multimeter',
            'Click here to buy the EEVblog BM786 Multimeter.'
          );

          out_text( ' (AU$215.00)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_external(
            'EEVblog BM235 Multimeter',
            'https://eevblog.store/products/eevblog-bm235-multimeter',
            'Click here to buy the EEVblog BM235 Multimeter.'
          );

          out_text( ' (AU$170.00)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_external(
            'EEVblog BM036 AC/DC Clamp Meter',
            'https://eevblog.store/products/eevblog-bm036-ac-dc-clamp-meter',
            'Click here to buy the EEVblog BM036 AC/DC Clamp Meter.'
          );

          out_text( ' (AU$149.00)' );

        tag_shut( 'li' );

      tag_shut( 'ul' );


    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h2', "Adrian Black on Adrian's Digital Basement", [ 'id' => 'adrian-black' ] );

      tag_open( 'p' );

        out_text( "I was there when Adrian Black " );

        render_link_external(
          'went pro',
          'https://blog.jj5.net/blog/2023/10/08/adrian-black-goes-pro/',
          'Click here to see my blog post from when Adrian Black turned into a professional YouTuber.'
        );

        out_text( '.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
