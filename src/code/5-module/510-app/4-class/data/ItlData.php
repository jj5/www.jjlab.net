<?php

class ItlData {

  protected $temp_file, $perm_file, $link_file;

  private $youtube = null;

  public function __construct() {

    $this->temp_file = new DataFile( '/var/state/www.jjlab.net/in-the-lab.json' );
    $this->perm_file = new DataFile( realpath( realpath( __DIR__ ) . '/../../../../../../dat/itl.json' ) );
    $this->link_file = new DataFile( realpath( realpath( __DIR__ ) . '/../../../../../../dat/link.json' ) );

  }

  public function save() {

    $this->temp_file->save();

    if ( is_dev() ) { $this->perm_file->save(); $this->link_file->save(); }

  }

  public function get_equipment_icon_ext( $hash ) {

    return $this->perm_file->data[ 'equipment_icon_ext' ][ $hash ] ?? null;

  }

  public function set_equipment_icon_ext( $hash, $ext ) {

    $this->perm_file->data[ 'equipment_icon_ext' ][ $hash ] = $ext;

  }

  public function get_youtube_video_duration( $video_id ) {

    try {

      $duration = $this->perm_file->data[ 'youtube_duration' ][ $video_id ] ?? null;

      if ( $duration ) { return $duration; }

      $response = $this->get_youtube()->videos->listVideos( 'contentDetails', [ 'id' => $video_id ] );

      $videoDetails = $response->getItems();

      if ( ! empty( $videoDetails ) ) {

        // 2024-01-12 jj5 - duration in ISO 8601 format (e.g., PT1M13S)

        $duration = $videoDetails[ 0 ]->contentDetails->duration;

        $this->perm_file->data[ 'youtube_duration' ][ $video_id ] = $duration;

        return $duration;

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

    $result = $this->temp_file->data[ $key ][ $today ] ?? null;

    if ( $result ) { return $result; }

    $url = "https://api.exchangerate-api.com/v4/latest/$currency";

    $json = file_get_contents( $url );

    $data = json_decode( $json, true );

    $this->temp_file->data[ $key ][ $today ] = $data;

    return $data;

  }

  public function get_short_link( $url ) {

    foreach ( $this->link_file->data as $key => $target ) {

      if ( $target === $url ) { return 'https://jj5.net' . $key; }

    }

    do {

      $key = '/' . random_int( 12345, 99999 );

    }
    while ( array_key_exists( $key, $this->link_file->data ) );

    $this->link_file->data[ $key ] = $url;

    if ( is_dev() ) { $this->link_file->save(); }

    return 'https://jj5.net' . $key;

  }

  public function get_long_link( $key ) {

    return $this->link_file->data[ $key ] ?? null;

  }
}
