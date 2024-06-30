<?php

class StringValue extends Value {

  public function __construct( int $item_id = 0, array $args = [] ) {

    $value = null;

    if ( count( $args ) ) {

      $value = strval( $args[ 0 ] );

    }

    parent::__construct( $item_id, $args, $value );

  }
}
