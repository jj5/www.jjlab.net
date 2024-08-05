<?php

function duration( $arg ) {

  return new_value( Duration::class, $arg );

}

class Duration extends IntervalValue {

}

class NullDuration extends Duration {

  use NullValue;

  public function __construct() {
    
    parent::__construct( new DateInterval(' PT0S' ) );
    
  }
}
