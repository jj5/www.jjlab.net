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

    return;

    mud_not_implemented();

    $this->temp_file->save();

    if ( is_dev() ) { $this->perm_file->save(); $this->link_file->save(); }

  }

  protected function run_proc( DataFile $file, callable $proc ) {

    for ( $try = 1; $try <= 10; $try++ ) {

      if ( $file->lock() ) {

        $result = $proc( $file );

        if ( ! $file->unlock() ) {

          mud_fail( 'failed to unlock perm file' );

        }

        return $result;

      }

      usleep( rand( 10, 1000 ) );

    }

    mud_fail( 'failed to lock perm file' );

  }

  public function get_equipment_icon_ext( $hash ) {

    return $this->run_proc(
      $this->perm_file,
      function( $file ) use ( $hash ) {
        return $file->get_data()[ 'equipment_icon_ext' ][ $hash ] ?? null;
      }
    );

  }

  public function set_equipment_icon_ext( $hash, $ext ) {

    return $this->run_proc(
      $this->perm_file,
      function( $file ) use ( $hash, $ext ) {
        $data = $file->get_data();
        $data[ 'equipment_icon_ext' ][ $hash ] = $ext;
        $file->save( $data );
      }
    );

  }

  public function get_youtube_video_duration( $video_id ) {

    try {

      $duration = $this->read_youtube_video_duration( $video_id );

      if ( $duration && $duration !== 'P0D' ) { return $duration; }

      $response = $this->get_youtube()->videos->listVideos( 'contentDetails', [ 'id' => $video_id ] );

      $videoDetails = $response->getItems();

      if ( ! empty( $videoDetails ) ) {

        // 2024-01-12 jj5 - duration in ISO 8601 format (e.g., PT1M13S)

        $duration = $videoDetails[ 0 ]->contentDetails->duration;

        return $this->run_proc(
          $this->perm_file,
          function( $file ) use ( $video_id, $duration ) {
            $data = $file->get_data();
            $data[ 'youtube_duration' ][ $video_id ] = $duration;
            $file->save( $data );
            return $duration;
          }
        );

      }

      return null;

    }
    catch ( Throwable $ex ) {

      error_log( $ex->getMessage() );

      throw $ex;

    }
  }

  protected function read_youtube_video_duration( $video_id ) {

    return $this->run_proc(
      $this->perm_file,
      function( $file ) use ( $video_id ) {
        return $file->get_data()[ 'youtube_duration' ][ $video_id ] ?? null;
      }
    );

  }

  protected function set_youtube_video_duration( $video_id, $duration ) {

    return $this->run_proc(
      $this->perm_file,
      function( $file ) use ( $video_id, $duration ) {
        $data = $file->get_data();
        $data[ 'youtube_duration' ][ $video_id ] ?? $duration;
        $file->save( $data );
      }
    );

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

    $result = $this->read_currency_rates( $key, $today );

    if ( $result ) { return $result; }

    $url = "https://api.exchangerate-api.com/v4/latest/$currency";

    $json = file_get_contents( $url );

    $data = json_decode( $json, true );

    $this->set_currency_rates( $key, $today, $data );

    return $data;

  }

  protected function read_currency_rates( $key, $today ) {

    return $this->run_proc(
      $this->temp_file,
      function( $file ) use ( $key, $today ) {
        return $file->get_data()[ $key ][ $today ] ?? null;
      }
    );

  }

  protected function set_currency_rates( $key, $today, $data ) {

    return $this->run_proc(
      $this->temp_file,
      function( $file ) use ( $key, $today, $data ) {
        $data = $file->get_data();
        $data[ $key ][ $today ] = $data;
        $file->save( $data );
      }
    );

  }

  public function get_short_link( $url ) {

    $jjcode = $this->read_short_link( $url );

    if ( $jjcode ) { return "https://jj5.net/$jjcode"; }  

    $jjcode = $this->new_jjcode();

    $this->set_short_link( $jjcode, $url );

    return "https://jj5.net/$jjcode";

  }

  protected function read_short_link( $url ) {

    return $this->run_proc(
      $this->link_file,
      function( $file ) use ( $url ) {

        foreach ( $file->get_data() as $jjcode => $target ) {

          if ( $target === $url ) { return $jjcode; }

        }
      }
    );

  }

  protected function new_jjcode() {

    return $this->run_proc(
      $this->link_file,
      function( $file ) {

        $data = $file->get_data();

        do {

          $jjcode = $this->get_new_jjcode();

        }
        while ( array_key_exists( $jjcode, $data ) );

        return $jjcode;

      }
    );

  }

  protected function set_short_link( $jjcode, $url ) {

    return $this->run_proc(
      $this->link_file,
      function( $file ) use ( $jjcode, $url ) {
        $data = $file->get_data();
        $data[ $jjcode ] = $url;
        $file->save( $data );
      }
    );

  }


  public function get_long_link( $key ) {

    return $this->run_proc(
      $this->link_file,
      function( $file ) use ( $key ) {
        return $file->get_data()[ $this->get_jjcode( $key ) ] ?? null;
      }
    );

  }

  public function get_new_jjcode() {

    return $this->run_proc(
      $this->link_file,
      function( $file ) {
        static $jjcode_min = 12345;
        static $jjcode_max = 99999;
        $data = $file->get_data();
        for ( $try = 1; $try <= 1000; $try++ ) {
          $jjcode = random_int( $jjcode_min, $jjcode_max );
          if ( ! array_key_exists( $jjcode, $data ) ) { return $jjcode; }
        }
        for( $jjcode = $jjcode_min; $jjcode <= $jjcode_max; $jjcode++ ) {
          if ( ! array_key_exists( $jjcode, $data ) ) { return $jjcode; }
        }
        mud_fail( 'failed to generate new jjcode' );
      }
    );

  }

  public function get_jjcode( string $key ) {

    if ( strlen( $key ) === 0 ) { return null; }

    if ( $key[ 0 ] === '/' ) { $key = substr( $key, 1 ); }

    return substr( $key, 0, 5 );

  }
}
