<?php

require_once __DIR__ . '/../../../../../run/run-web.php';

function app_render() {

  if ( check_cache_for_version() ) { return; }

  $path = $_SERVER[ 'PATH_INFO' ] ?? null;

  $filename = basename( $path );

  $extension = strtolower( ltrim( strrchr( $filename, '.' ), '.' ) );

  $res_dir = realpath( __DIR__ . '/../../../res/img' );

  switch ( $extension ) {

    case 'png' :
    case 'jpg' :
    case 'webp' :
    case 'svg' :

      $path = find_image( $filename, $res_dir );

      if ( ! $path || ! file_exists( $path ) ) { return render_404(); }

      return render_image_path( $path, $extension );

    default :

      $filename = rtrim( $filename, '.' );

      foreach ( [ 'png', 'jpg', 'webp', 'svg' ] as $extension ) {

        $path = find_image( $filename . '.' . $extension, $res_dir );

        if ( $path && file_exists( $path ) ) { return render_image_path( $path, $extension ); }

      }

      render_404();

  }
}

function render_image_path( $path, $extension ) {

  mud_http_cache_forever();

  render_image_headers( $extension );

  readfile( $path );

}
