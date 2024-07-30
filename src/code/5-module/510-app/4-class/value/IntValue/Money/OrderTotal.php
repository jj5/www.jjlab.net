<?php

function order_total() {

  return new_value( OrderTotal::class, func_get_args() );

}

class OrderTotal extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_total( $money );

  }
}

class NullOrderTotal extends OrderTotal {

  use NullValue;

}
