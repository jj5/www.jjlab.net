<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  if ( $path_info !== null ) {

    $path_parts = explode( '/', $path_info );

    if ( count( $path_parts ) === 2 ) {

      $video_id = $path_parts[ 1 ];

      $youtube_url = 'https://youtu.be/' . $video_id;

      return http_redirect( $youtube_url );

    }
  }

  return default_redirect( url_base() . '/feed.php' );

}
