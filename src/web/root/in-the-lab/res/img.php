<?php

require_once __DIR__ . '/../../../../../run/run-web.php';

function app_render() {

  if ( check_cache_for_version() ) { return; }

  $path = $_SERVER[ 'PATH_INFO' ] ?? null;

  $filename = basename( $path );

  $extension = strtolower( ltrim( strrchr( $filename, '.' ), '.' ) );

  switch ( $extension ) {

    case 'png' :
    case 'jpg' :
    case 'webp' :
    case 'svg' :

      $res_dir = realpath( __DIR__ . '/../../../res/img' );

      $path = find_image( $filename, $res_dir );

      if ( ! $path || ! file_exists( $path ) ) { return render_404(); }

      mud_http_cache_forever();

      render_image_headers( $extension );

      readfile( $path );

      break;

    default :

      render_404();

  }
}
