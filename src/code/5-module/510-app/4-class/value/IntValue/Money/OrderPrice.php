<?php

function order_price() {

  return new_value( OrderPrice::class, func_get_args() );

}

class OrderPrice extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_price( $money );

  }
}

class NullOrderPrice extends OrderPrice {

  use NullValue;

}
