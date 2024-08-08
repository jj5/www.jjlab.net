<?php

define( 'DB_LOG_PATH', '/var/state/www.jjlab.net/log.sqlite' );

//ob_start( 'ob_gzhandler' );

if ( false ) {

  try {

    // 2024-01-19 jj5 - I guess it's too bad if you didn't want this? :P

    while ( ob_get_level() ) { ob_end_clean(); }

    // 2024-01-19 jj5 - we start a normal buffer, then we start a compressed buffer; we do this
    // so that we can ob_get_contents() for the compressed buffer...

    ob_start();
    ob_start( 'ob_gzhandler' );

    global $g_jj_start_time;

    $g_jj_start_time = microtime( true );

    register_shutdown_function( 'jj_shutdown' );

    jj_log_this();

  }
  catch ( Throwable $ex ) {

    try {

      mud_log_exception_ignored( $ex );

    }
    catch ( Throwable $ignore ) { ; }

  }
}

function jj_shutdown() {

  try {

    $ob_level = ob_get_level();

    while ( ob_get_level() > 1 ) { ob_end_flush(); }

    // 2024-01-19 jj5 - this data is already compressed from ob_start( 'ob_gzhandler' ) above...
    //
    $data = ob_get_contents();

    jj_log_done( $ob_level, $data );

  }
  catch ( Throwable $ex ) {

    try {

      mud_log_exception_ignored( $ex );

    }
    catch ( Throwable $ignore ) { ; }

  }
}

function jj_log_this() {

  return false;

  $globals = jj_data_encode( $GLOBALS );

  $sql = "insert into weblog ( weblog_globals ) values ( :globals )";

  jj_run_sql( $sql, [ ':globals' => $globals ] );

  jj_request_id( jj_get_pdo()->lastInsertId() );

}

function jj_log_done( $ob_level, $data ) {

  return false;

  global $g_jj_start_time;

  $processing_time = intval( ( microtime( true ) - $g_jj_start_time ) * 1_000_000 );

  $response_headers = jj_data_encode( headers_list() );
  $response_code = http_response_code();

  $gzip_length = strlen( $data );

  // 2024-01-19 jj5 - for now response data logging is disabled for 200 responses...

  //if ( $response_code == 200 ) { $data = null; }

  if ( preg_match( '/^[123]/', strval( $response_code ) ) ) { $data = null; }

  $sql = "
    update
      weblog
    set
      weblog_response_code = :response_code,
      weblog_response_headers = :response_headers,
      weblog_processing_time = :processing_time,
      weblog_ob_level = :ob_level,
      weblog_response_data = :response_data,
      weblog_response_gzip_length = :response_gzip_length,
      weblog_updated_on = datetime('now')
    where
      weblog_id = :id
  ";

  jj_run_sql(
    $sql,
    [
      ':response_code' => $response_code,
      ':response_headers' => $response_headers,
      ':processing_time' => $processing_time,
      ':ob_level' => $ob_level,
      ':response_data' => $data,
      ':response_gzip_length' => $gzip_length,
      ':id' => jj_request_id(),
    ]
  );

}

function jj_request_id( $set = null ) {

  static $id = null;

  if ( $set !== null ) { $id = $set; }

  return $id;

}

function jj_run_sql( $sql, $params = [] ) {

  return false;

  $pdo = jj_get_pdo();

  $stmt = $pdo->prepare( $sql );

  $stmt->execute( $params );

  $result = $stmt->fetchAll( PDO::FETCH_ASSOC );

  return $result;

}

function jj_data_encode( $data ) {

  return false;

  static $flags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;

  $json = json_encode( $data, $flags );

  return gzencode( $json );

}

function jj_get_pdo() {

  return false;

  static $pdo = null;

  if ( $pdo !== null ) { return $pdo; }

  $pdo = new PDO( 'sqlite:' . DB_LOG_PATH );

  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  $sql = "
    create table if not exists weblog (
      weblog_id integer primary key,
      weblog_globals blob,
      weblog_response_code integer null,
      weblog_response_headers blob null,
      weblog_response_data blob null,
      weblog_response_gzip_length integer null,
      weblog_ob_level integer null,
      weblog_processing_time integer null,
      weblog_created_on datetime default (datetime('now')),
      weblog_updated_on datetime default (datetime('now'))
    )
  ";

  $pdo->exec( $sql );

  return $pdo;

}
