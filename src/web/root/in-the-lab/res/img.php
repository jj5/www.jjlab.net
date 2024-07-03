<?php

require_once __DIR__ . '/../../../../../inc/framework.php';

function render() {

  $path = $_SERVER[ 'PATH_INFO' ] ?? null;

  $filename = basename( $path );

  $extension = strtolower( ltrim( strrchr( $filename, '.' ), '.' ) );

  switch ( $extension ) {

    case 'png' :
    case 'jpg' :
    case 'webp' :
    case 'svg' :

      $res_dir = realpath( __DIR__ . '/../../../res/img' );

      $path = find_image( $res_dir, $filename );

      if ( ! $path || ! file_exists( $path ) ) { return http_response_code( 404 ); }

      render_image_headers( $extension );

      readfile( $path );

      break;

    default :

      http_response_code( 404 );

  }
}

function find_image( $dir, $filename ) {

  assert( is_dir( $dir ) );

  foreach ( scandir( $dir ) as $file ) {

    if ( $file === '.' || $file === '..' ) { continue; }

    if ( is_dir( $dir . '/' . $file ) ) {

      $path = find_image( $dir . '/' . $file, $filename );

      if ( $path !== null ) { return $path; }

    } else if ( $file === $filename ) {

      return $dir . '/' . $file;

    }
  }

  return null;

}
