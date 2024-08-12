<?php

function order_price( $arg ) {

  return new_value( OrderPrice::class, $arg );

}

class OrderPrice extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_price( $money );

  }
}

class NullOrderPrice extends OrderPrice {

  use NullValue;

}
