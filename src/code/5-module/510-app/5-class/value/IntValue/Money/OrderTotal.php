<?php

function order_total( $arg ) {

  return new_value( OrderTotal::class, $arg );

}

class OrderTotal extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_total( $money );

  }
}

class NullOrderTotal extends OrderTotal {

  use NullValue;

}
