<?php

function order_price() {

  return new_value( OrderPrice::class, func_get_args() );

}

class OrderPrice extends Money {

  protected function copy( $money_string ) {

    return order_price( $money_string );

  }
}

class NullOrderPrice extends OrderPrice {

  use NullValue;

}
