<?php

function order_shipping() {

  return new_value( OrderShipping::class, func_get_args() );

}

class OrderShipping extends Money {

  protected function copy( $money_string ) {

    return order_shipping( $money_string );

  }
}

class NullOrderShipping extends OrderShipping {

  use NullValue;

}
