<?php

function equipment_icon( $arg ) {

  return new_value( EquipmentIcon::class, $arg );

}

class EquipmentIcon extends Url {

  public function get_hash() : string { return mud_hash( $this->to_string() ); }

  // 2024-07-03 jj5 - this is wrong and it's not used anyway
  /*
  public function get_auto_file() {

    $hash = $this->get_hash();

    $ext = itl()->get_equipment_icon_ext( $hash );

    if ( $ext === null ) {

      $this->download( $ext );

    }

    $dir = realpath( realpath( __DIR__ ) . "/../img/auto" );

    $path = "$dir/$hash.$ext";

    return $path;

  }
  */

  public function get_auto_url() {

    $hash = $this->get_hash();

    $ext = itl()->get_equipment_icon_ext( $hash );

    $this->auto_download( $hash, $ext );

    return url_base( $use_cdn = true ) . "/res/img.php/auto/$hash.$ext?v=" . get_resource_version( "$hash.$ext" );

  }

  public function get_public_url() {

    $hash = $this->get_hash();

    $ext = itl()->get_equipment_icon_ext( $hash );

    $this->auto_download( $hash, $ext );

    return "https://der3syffk4l6q.cloudfront.net/in-the-lab/res/img.php/auto/$hash.$ext?v=" . get_resource_version( "$hash.$ext" );

  }

  private function auto_download( string $hash, &$ext = null ) {

    if ( $ext === null ) {

      if ( ! DEV ) {

        error_log( 'do not have cache equipment icon' );

      }
      elseif ( $this->download( $ext ) ) {

        itl()->set_equipment_icon_ext( $hash, $ext );

      }
      else {

        mud_fail( 'failed to download equipment icon', [ 'hash' => $hash, 'ext' => $ext ] );

      }
    }
  }

  private function download( &$ext = null ) {

    $ext = null;

    $hash = $this->get_hash();
    $url = $this->to_string();
    $user_agent = CURL_USER_AGENT;

    $ch = curl_init( $url );

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_BINARYTRANSFER, true );
    curl_setopt( $ch, CURLOPT_USERAGENT, $user_agent );
    curl_setopt( $ch, CURLOPT_HEADER, true );

    $response = curl_exec( $ch );

    $http_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );

    if ( $http_code !== 200 ) {

      error_log( "Error: HTTP response code is " . $http_code );

      curl_close( $ch );

      return false;

    }

    $header_size = curl_getinfo( $ch, CURLINFO_HEADER_SIZE );
    $headers = substr( $response, 0, $header_size );
    $body = substr( $response, $header_size );

    preg_match( '/^Content-Type: (\w+\/\w+)/mi', $headers, $matches );
    $content_type = $matches[ 1 ] ?? 'application/octet-stream';

    $ext = $this->get_ext( $content_type );

    itl()->set_equipment_icon_ext( $hash, $ext );

    $dir = realpath( realpath( __DIR__ ) . "/../../../../../../../web/res/img/auto" );

    $path = "$dir/$hash.$ext";

    file_put_contents( $path, $body );

    curl_close( $ch );

    return true;

  }

  public function get_ext( $content_type ) {

    $result = EXTENSION_CONTENT_TYPE_MAP[ $content_type ] ?? null;

    if ( $result ) { return $result; }

    // 2024-12-23 jj5 - HACK!
    //
    if ( $content_type === 'application/octet-stream' ) { return 'webp'; }

    dump( $content_type );

    $parts = explode( '/', $content_type, 2 );

    if ( count( $parts ) === 2 ) { return $parts[ 1 ]; }

    return null;

  }
}

class NullEquipmentIcon extends EquipmentIcon {

  use NullValue;

}
