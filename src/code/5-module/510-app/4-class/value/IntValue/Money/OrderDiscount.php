<?php

function order_discount() {

  return new_value( OrderDiscount::class, func_get_args() );

}

class OrderDiscount extends Money {

  protected function copy( $money_string ) {

    return order_discount( $money_string );

  }
}

class NullOrderDiscount extends OrderDiscount {

  use NullValue;

}
