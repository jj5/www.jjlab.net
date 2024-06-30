<?php

class IntervalValue extends Value {

  public function __construct( int $item_id = 0, array $args = [] ) {

    $value = null;

    if ( count( $args ) ) {

      $arg = $args[ 0 ];

      $value = is_a( $arg, DateInterval::class ) ? $arg : new DateInterval( $arg );

    }

    parent::__construct( $item_id, $args, $value );

  }

  public function to_string() {

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

  protected static function format_xx( int $value ) {

    if ( $value < 10 ) { return "0$value"; }

    return strval( $value );

  }
}
