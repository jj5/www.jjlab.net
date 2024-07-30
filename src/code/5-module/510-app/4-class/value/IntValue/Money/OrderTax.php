<?php

function order_tax() {

  return new_value( OrderTax::class, func_get_args() );

}

class OrderTax extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_tax( $money );

  }
}

class NullOrderTax extends OrderTax {

  use NullValue;

}
