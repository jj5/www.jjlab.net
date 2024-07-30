<?php

function order_discount() {

  return new_value( OrderDiscount::class, func_get_args() );

}

class OrderDiscount extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_discount( $money );

  }
}

class NullOrderDiscount extends OrderDiscount {

  use NullValue;

}
