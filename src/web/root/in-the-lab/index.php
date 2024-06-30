<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_index_main();

    default :

      return default_redirect( url_base() . '/' );

  }
}

function render_index_main() {

  render_head( 'Welcome' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'In The Lab With Jay Jay' );

        tag_text( 'p', 'Hi there! Welcome to my beginner-friendly video blog about electronics!' );

        tag_text( 'p', "My name is Jay Jay, I'll be your host." );

        tag_text( 'p', "I am a computer programmer by day and a maker by night. I'm here to share my passion for electronics and technology with you. I hope you enjoy the content I create and find it helpful." );

        tag_open( 'p' );

          out_text( 'If you want to help a brother out, please consider subscribing to my YouTube channel ' );

          tag_text(
            'a',
            'youtube.com/@InTheLabWithJayJay',
            [
              'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
              'class' => 'external',
              'title' => "Subscribe to my YouTube channel!",
              'target' => '_blank',
            ]
          );

          out_text( ' or supporting me on Patreon: ' );

          tag_text(
            'a',
            'patreon.com/JohnElliotV',
            [
              'href' => 'https://www.patreon.com/JohnElliotV',
              'class' => 'external',
              'title' => "Super big shout out to my Patreon supporters for supporting the channel!",
              'target' => '_blank',
            ]
          );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_latest();

    render_section_about_main();

    render_section_about_conventions();

    render_section_about_announcements();

    render_section_about_content();

    render_section_about_channels();

    render_section_about_main_show();

    render_section_about_special_shows();

    render_section_about_extra_content();

    render_section_about_video_quality();

    render_section_about_costume();

    render_section_about_contact();

    render_section_about_sponsors();

    render_section_about_equipment();

    render_section_about_affiliates();

    render_section_about_thanks();

    render_section_about_next();

  render_foot();

}
