<?php

class IntValue extends MudInteger {

  /*
  public function __construct( int $item_id = 0, array $args = [] ) {

    $value = null;

    if ( count( $args ) ) {

      $value = intval( $args[ 0 ] );

    }

    parent::__construct( $item_id, $args, $value );

  }
  */

  public function to_string() : string {

    return strval( $this->get_int() );
    
  }

  public function format( mixed $spec = null ) : string {

    return number_format( $this->get_value() );
    
  }
}
