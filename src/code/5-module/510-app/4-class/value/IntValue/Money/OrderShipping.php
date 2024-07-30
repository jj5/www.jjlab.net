<?php

function order_shipping() {

  return new_value( OrderShipping::class, func_get_args() );

}

class OrderShipping extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_shipping( $money );

  }
}

class NullOrderShipping extends OrderShipping {

  use NullValue;

}
