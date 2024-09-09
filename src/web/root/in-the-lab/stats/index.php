<?php

require_once __DIR__ . '/../../../../../run/run-web.php';

function app_render() {

  return render_stats_index();

}

function render_stats_index() {

  $title = 'Statistics';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          out_text( "On this page you can find some statistics about other YouTube channels I track." );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Channel Stats', [ 'id' => 'stats' ] );

      tag_open( 'p' );

        out_text( 'These are the stats files I maintain:' );

      tag_shut( 'p' );

      tag_open( 'ul' );

        foreach ( glob( '*.html' ) as $file ) {

          $channel = basename( $file, '.html' );

          tag_open( 'li' );

            tag_open( 'a', [ 'href' => $file ] );

              out_text( "@$channel" );

            tag_shut( 'a' );

          tag_shut( 'li' );

        }

      tag_shut( 'ul' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
