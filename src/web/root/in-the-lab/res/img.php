<?php

require_once __DIR__ . '/../../../../../run/run-web.php';

function app_render() {

  if ( check_cache_for_version() ) { return; }

  $path = $_SERVER[ 'PATH_INFO' ] ?? null;

  $filename = basename( $path );

  $extension = strtolower( ltrim( strrchr( $filename, '.' ), '.' ) );

  $res_dir = realpath( __DIR__ . '/../../../res/img' );

  switch ( $extension ) {

    case 'avif' :
    case 'png' :
    case 'jpg' :
    case 'webp' :
    case 'svg' :
    case 'gif' :

      $path = find_image( $filename, $res_dir );

      if ( ! $path || ! file_exists( $path ) ) { return render_404(); }

      return render_image_path( $path, $extension );

    default :

      // 2024-08-14 jj5 - NOTE: I accidentally published some URLs with missing file name extensions... so we handle that
      // here and 301 redirect to the correct URL.

      $filename = rtrim( $filename, '.' );

      foreach ( [ 'png', 'jpg', 'webp', 'svg', 'gif' ] as $extension ) {

        $fullname = "$filename.$extension";

        $path = find_image( $fullname, $res_dir );

        if ( $path && file_exists( $path ) ) {

          $url = "https://www.inthelabwithjayjay.com/in-the-lab/res/img.php/$fullname";

          // 2024-08-14 jj5 - we could just render here, but redirection is probably tidier...

          header( 'HTTP/1.1 301 Moved Permanently', true, 301 );

          header( 'Location: ' . $url );

          exit;

          //return render_image_path( $path, $extension );

        }
      }

      render_404();

      exit;

  }
}

function render_image_path( $path, $extension ) {

  mud_http_cache_forever();

  render_image_headers( $extension );

  readfile( $path );

}
