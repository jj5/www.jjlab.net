<?php

class ItlData2 {

  protected $temp_file, $perm_file, $link_file;

  private $youtube = null;

  public function __construct() {

    $this->temp_file = new DataFile2( '/var/state/www.jjlab.net/in-the-lab.json' );
    $this->perm_file = new DataFile2( realpath( realpath( __DIR__ ) . '/../../../../../../dat/itl.json' ) );
    $this->link_file = new DataFile2( realpath( realpath( __DIR__ ) . '/../../../../../../dat/link.json' ) );

  }

  public function get_equipment_icon_ext( $hash ) {

    return $this->perm_file->get_value( 'equipment_icon_ext', $hash );

  }

  public function set_equipment_icon_ext( $hash, $ext ) {

    $this->perm_file->set_value( 'equipment_icon_ext', $hash, $ext );

  }

  public function get_youtube_video_duration( $video_id ) {

    try {

      $duration = $this->perm_file->get_value( 'youtube_duration', $video_id );

      if ( $duration && $duration !== 'P0D' ) { return $duration; }

      $response = $this->get_youtube()->videos->listVideos( 'contentDetails', [ 'id' => $video_id ] );

      $videoDetails = $response->getItems();

      if ( ! empty( $videoDetails ) ) {

        // 2024-01-12 jj5 - duration in ISO 8601 format (e.g., PT1M13S)

        $duration = $videoDetails[ 0 ]->contentDetails->duration;

        $this->perm_file->set_value( 'youtube_duration', $video_id, $duration );

      }

      return null;

    }
    catch ( Throwable $ex ) {

      error_log( $ex->getMessage() );

      throw $ex;

    }
  }

  public function get_youtube() {

    if ( $this->youtube === null ) {

      $client = new Google_Client();

      $client->setDeveloperKey( YOUTUBE_API_KEY );

      $this->youtube = new Google_Service_YouTube( $client );

    }

    return $this->youtube;

  }

  public function get_currency_rates( $currency ) {

    $key = "currency-$currency";
    $today = date( 'Y-m-d' );

    $result = $this->temp_file->get_value( 'currency-rates', $key, $today );

    if ( $result ) { return $result; }

    $url = "https://api.exchangerate-api.com/v4/latest/$currency";

    $json = file_get_contents( $url );

    $data = json_decode( $json, true );

    $this->temp_file->set_value( 'currency-rates', $key, $today, $data );

    return $data;

  }

  public function get_short_link( $url ) {

    $jjcode = $this->link_file->get_key( 'short-link', $url );

    if ( $jjcode ) { return "https://jj5.net/$jjcode"; }  

    $jjcode = $this->new_jjcode();

    $this->link_file->set_value( 'short-link', $jjcode, $url );

    return "https://jj5.net/$jjcode";

  }

  protected function new_jjcode() {

    do {

      $jjcode = $this->get_new_jjcode();

    }
    while ( $this->link_file->get_value( 'short-link', $jjcode ) );

    return $jjcode;

  }

  public function get_long_link( $key ) {

    return $this->link_file->get_value( 'short-link', $this->get_jjcode( $key ) );

  }

  public function get_new_jjcode() {

    static $jjcode_min = 12345;
    static $jjcode_max = 99999;

    return random_int( $jjcode_min, $jjcode_max );

  }

  public function get_jjcode( string $key ) {

    if ( strlen( $key ) === 0 ) { return null; }

    if ( $key[ 0 ] === '/' ) { $key = substr( $key, 1 ); }

    return substr( $key, 0, 5 );

  }
}
