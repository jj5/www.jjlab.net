<?php

class IntervalValue extends MudDateInterval {

  /*
  public function __construct( int $item_id = 0, array $args = [] ) {

    $value = null;

    if ( count( $args ) ) {

      $arg = $args[ 0 ];

      $value = is_a( $arg, DateInterval::class ) ? $arg : new DateInterval( $arg );

    }

    parent::__construct( $item_id, $args, $value );

  }
  */

  public function to_string() : string {

    $interval = $this->get_value();

    //$interval->format( '%h:%i:%s' );

    $h = $interval->h;
    $m = $interval->i;
    $s = $interval->s;

    $result = [];

    if ( $h ) {

      $result[] = strval( $h );
      $result[] = self::format_xx( $m );
      $result[] = self::format_xx( $s );

    }
    else {

      $result[] = strval( $m );
      $result[] = self::format_xx( $s );

    }

    return implode( ':', $result );

  }

  public function get_seconds() {

    // Create a DateTime object representing the start time (epoch)
    $start = new DateTime('@0'); // The epoch time (Unix timestamp 0)

    // Create a DateTime object representing the end time by adding the interval to the start time
    $end = clone $start;

    $date_interval = $this->get_value();

    if ( ! $date_interval ) { return 0; }

    $end->add( $date_interval );

    // Calculate the difference in seconds
    $seconds = $end->getTimestamp() - $start->getTimestamp();

    return $seconds;

  }

  public function get_minutes() {

    return $this->get_seconds() / 60.0;

  }

  public function get_hours() {

    return $this->get_minutes() / 60.0;

  }

  public function get_sort_value() : int|float|string|null { return $this->get_seconds(); }

  protected static function format_xx( int $value ) {

    if ( $value < 10 ) { return "0$value"; }

    return strval( $value );

  }
}
