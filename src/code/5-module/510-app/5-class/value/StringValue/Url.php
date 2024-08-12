<?php

abstract class Url extends StringValue {

  private $parts = null;
  private $host = null;
  private $vendor = null;

  private $product_code = false;

  function get_product_code() {

    if ( $this->product_code === false ) {

      $this->product_code = null;

      foreach ( PRODUCT_CODE_REGEX as $regex ) {

        if ( preg_match( $regex, $this->get_value(), $matches ) ) {

          $this->product_code = $matches[ 1 ];

          break;

        }
      }
    }

    return $this->product_code;

  }

  public function get_vendor() {

    if ( $this->parts === null ) { $this->parse(); }

    return $this->vendor;

  }

  public function get_domain() {

    if ( $this->parts === null ) { $this->parse(); }

    return $this->host;

  }

  public static function get_vendor_default( $url_host ) {

    $host_parts = explode( '.', $url_host );

    if ( $host_parts[ 0 ] === 'www' ) {

      array_shift( $host_parts );

    }

    return implode( '.', $host_parts );

  }

  private function parse() {

    if ( $this->get_value() === null ) {
      
      $this->parts = [];

      return;

    }

    $this->parts = parse_url( $this->get_value() );

    $this->host = strval( $this->parts[ 'host' ] ?? '' );

    $this->vendor = VENDOR_HOST_MAP[ $this->host ] ?? self::get_vendor_default( $this->host );

  }

  public function render_external_link( $text = null, $attrs = [] ) {

    $href = $this->get_value();
    $text = $text ?? $href;

    if ( ! $href ) { return; }

    render_link_external(
      $text,
      $href,
      TITLE_LINK_WEB,
      $attrs,
    );

  }
}
