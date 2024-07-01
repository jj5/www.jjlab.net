<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;
  $query_string = $_SERVER[ 'QUERY_STRING' ] ?? null;

  $url = url_base() . '/series.php' . $path_info . ( $query_string ? '?' . $query_string : '' );

  return http_redirect( $url, 301 );

}
