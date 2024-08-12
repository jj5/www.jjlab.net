<?php

function order_shipping( $arg ) {

  return new_value( OrderShipping::class, $arg );

}

class OrderShipping extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_shipping( $money );

  }
}

class NullOrderShipping extends OrderShipping {

  use NullValue;

}
