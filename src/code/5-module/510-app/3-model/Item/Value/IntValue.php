<?php

class IntValue extends Value {

  public function __construct( int $item_id = 0, array $args = [] ) {

    $value = null;

    if ( count( $args ) ) {

      $value = intval( $args[ 0 ] );

    }

    parent::__construct( $item_id, $args, $value );

  }

  public function to_string() {

    return number_format( $this->get_value() );
    
  }
}
