<?php

class DateValue extends MudDate {

  public function __construct( DateTimeInterface|string|null $arg = null ) {

    if ( $arg === null ) { $arg = '@0'; }

    $value = is_a( $arg, DateTimeImmutable::class ) ? $arg : new DateTimeImmutable( $arg );

    parent::__construct( $value );

  }

  public function get_sort_value() : int|float|string|null {

    return $this->is_null() ?
      0 :
      $this->get_value()->getTimestamp();

  }

  public function to_string() : string {

    if ( $this->is_null() ) { return ''; }

    return $this->get_value()->format( DATE_FORMAT );

  }

  public function format_for_user() {

    return $this->get_value()->format( DATE_FORMAT );

  }

  public function format_for_web() : string {

    static $utc = null;

    if ( ! $utc ) { $utc = new DateTimeZone( 'UTC' ); }

    $datetime = clone $this->get_value();

    $datetime->setTimezone( $utc );

    return $datetime->format( DATE_FORMAT_FOR_WEB );

  }

  public function format_for_sitemap() : string {

    static $utc = null;

    if ( ! $utc ) { $utc = new DateTimeZone( 'UTC' ); }

    $datetime = clone $this->get_value();

    $datetime->setTimezone( $utc );

    return $datetime->format( DATE_FORMAT_FOR_SITEMAP );

  }
}
