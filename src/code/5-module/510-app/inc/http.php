<?php

function http_redirect_home() {

  if ( DEBUG ) {

    var_dump( $_SERVER );

    exit;

  }

  return http_redirect( url_base() . '/' );

}

function default_redirect( $url ) {

  if ( DEBUG ) {

    while ( ob_get_level() ) { ob_end_clean(); }

    header( 'HTTP/1.0 404 Not Found', true, 404 );

    echo '404 Not Found: ' . $_SERVER[ 'REQUEST_URI' ];

    exit;

  }

  return http_redirect( $url );

}

function http_redirect( $url, $response_code = 302 ) {

  while ( ob_get_level() ) { ob_end_clean(); }
  header( "Location: $url", true, $response_code );
  exit();

}

function url_base( $use_cdn = false ) {

  if ( is_dev() ) { return '/www.jjlab.net/in-the-lab'; }

  if ( $use_cdn ) { return 'https://der3syffk4l6q.cloudfront.net/in-the-lab'; }

  if ( is_prod() ) { return '/in-the-lab'; }

  return '/www.jjlab.net/in-the-lab';

}
