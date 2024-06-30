<?php

class DateValue extends Value {

  public function __construct( int $item_id = 0, array $args = [] ) {

    $value = null;

    if ( count( $args ) ) {

      $arg = $args[ 0 ];

      $value = is_a( $arg, DateTime::class ) ? $arg : new DateTime( $arg );

    }

    parent::__construct( $item_id, $args, $value );

  }

  public function get_sort_value() {

    return $this->is_null() ?
      0 :
      $this->get_value()->getTimestamp();

  }

  public function to_string() {

    if ( $this->is_null() ) { return ''; }

    return $this->get_value()->format( DATE_FORMAT );

  }

  public function format_for_web() {

    static $utc = null;

    if ( ! $utc ) { $utc = new DateTimeZone( 'UTC' ); }

    $datetime = clone $this->get_value();

    $datetime->setTimezone( $utc );

    return $datetime->format( DATE_FORMAT_FOR_WEB );

  }

  public function format_for_sitemap() {

    static $utc = null;

    if ( ! $utc ) { $utc = new DateTimeZone( 'UTC' ); }

    $datetime = clone $this->get_value();

    $datetime->setTimezone( $utc );

    return $datetime->format( DATE_FORMAT_FOR_SITEMAP );

  }
}
