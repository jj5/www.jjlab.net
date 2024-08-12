<?php

function order_tax( $arg ) {

  return new_value( OrderTax::class, $arg );

}

class OrderTax extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_tax( $money );

  }
}

class NullOrderTax extends OrderTax {

  use NullValue;

}
