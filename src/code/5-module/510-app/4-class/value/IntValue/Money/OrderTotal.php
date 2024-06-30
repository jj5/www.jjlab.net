<?php

function order_total() {

  return new_value( OrderTotal::class, func_get_args() );

}

class OrderTotal extends Money {

  protected function copy( $money_string ) {

    return order_total( $money_string );

  }
}

class NullOrderTotal extends OrderTotal {

  use NullValue;

}
