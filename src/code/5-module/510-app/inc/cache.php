<?php

function get_cache_file(
  string $path,
  string $suffix = '-default',
  &$hash = null,
  &$dir = null
) {

  $dir = get_cache_dir( $path, $suffix, $hash );

  $file = "{$hash}{$suffix}";

  return "$dir/$file";

}

function get_cache_dir( string $path, string $suffix = APP_DEFAULT_CACHE_SUFFIX, &$hash = null ) {

  $hash = get_path_hash( $path );

  $dir = APP_DIR . "/dat/cache/web/{$hash[0]}/{$hash[1]}";

  if ( DEV && ! is_dir( $dir ) ) {

    if ( ! mkdir( $dir, 0777, $recursive = true ) ) {

      mud_fail( 'failed to create cache dir.', [ 'dir' => $dir ] );

    }
  }

  return $dir;

}

function get_path_hash( $path = null ) {

  if ( $path === null ) {

    $path = explode( '?', $_SERVER[ 'REQUEST_URI' ] )[ 0 ];

  }

  // 2024-08-12 jj5 - SEE: https://chatgpt.com/share/361e8339-fe35-4b83-92c6-1f69b6297f0a
  //
  return hash( 'sha512/224', $path, $raw_output = false );

  // 2024-08-12 jj5 - OLD: we don't use SHA1 because it's not secure...
  // 2024-08-12 jj5 - OLD: this is smaller and is what git uses...
  //return hash( 'sha1', $path, $raw_output = false );
  // 2024-08-12 jj5 - OLD: this is larger and is what I was using...
  //return hash( 'sha512/224', $path, $raw_output = false );

}

function fetch_sitemap( $url ) {

  return fetch_url( $url );

}

function fetch_url( $url, $cookie = null, &$response_code = null ) {

  assert( strpos( '?', $url ) === false );

  if ( $cookie ) {

    $cookie = "$cookie; cache=1";

  }
  else {

    $cookie = "cache=1";

  }

  for ( $try = 1; $try <= 10; $try++ ) {

    $ch = curl_init();

    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $ch, CURLOPT_COOKIE, $cookie );

    $response = curl_exec( $ch );

    if ( $response === false ) {

      mud_log_trace( 'failed to fetch URL, will retry.', [ 'url' => $url, 'response_code' => $response_code ] );

      sleep( rand( 1, 10 ) );

      continue;

    }

    $response_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );

    curl_close( $ch );

    if ( $response_code !== 200 ) {

      mud_log_trace( 'failed to fetch URL, will retry.', [ 'url' => $url, 'response_code' => $response_code ] );

      sleep( rand( 1, 10 ) );

      continue;

    }

    return $response;

  }

  exit( 1 );

}
