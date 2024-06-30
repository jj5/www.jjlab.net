<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? '';

  $path_parts = explode( '/', $path_info );

  $video_id = $path_parts[ 1 ] ?? null;

  if ( $video_id ) {

    // 2024-06-29 jj5 - TODO: fix this...

    foreach ( app_stash()->get_live_video_list() as $video ) {

      if ( $video->get_slug()->to_string() === $video_id ) {

        return render_video( $video );

      }
    }
  }

  default_redirect( url_base() . '/channel.php' );

}

function render_video( $video ) {

  render_head( $video->get_name() );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_text( 'h1', $video->get_name() );

        tag_text( 'p', $video->get_youtube_video_title() );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

      $video->get_segment()->render();

    tag_shut( 'section' );

  render_foot();

}
