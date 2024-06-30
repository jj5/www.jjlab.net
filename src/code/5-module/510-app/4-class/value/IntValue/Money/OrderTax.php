<?php

function order_tax() {

  return new_value( OrderTax::class, func_get_args() );

}

class OrderTax extends Money {

  protected function copy( $money_string ) {

    return order_tax( $money_string );

  }
}

class NullOrderTax extends OrderTax {

  use NullValue;

}
