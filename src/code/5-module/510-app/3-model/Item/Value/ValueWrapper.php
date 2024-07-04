<?php

class ValueWrapper extends Value {

  public function __construct( int $item_id = 0, array $args = [] ) {

    $value = null;

    if ( count( $args ) ) {

      $arg = $args[ 0 ];

      assert( is_a( $arg, Value::class ) );

      $value = $arg;

    }

    parent::__construct( $item_id, $args, $value );

  }

  public function is_null() : bool { return parent::get_value()->is_null(); }
  public function is_empty() { return parent::get_value()->is_empty(); }
  public function get_value() { return parent::get_value()->get_value(); }

}
