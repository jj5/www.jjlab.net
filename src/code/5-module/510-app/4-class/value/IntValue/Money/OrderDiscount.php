<?php

function order_discount( $arg ) {

  return new_value( OrderDiscount::class, $arg );

}

class OrderDiscount extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_discount( $money );

  }
}

class NullOrderDiscount extends OrderDiscount {

  use NullValue;

}
