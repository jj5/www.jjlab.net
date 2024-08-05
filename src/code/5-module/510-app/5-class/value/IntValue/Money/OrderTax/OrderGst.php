<?php

function order_gst( $arg ) {

  return new_value( OrderGst::class, $arg );

}

class OrderGst extends OrderTax {

  protected function copy_price( IMudMoney $money ) {

    return order_gst( $money );

  }
}

class NullOrderGst extends OrderGst {

  use NullValue;

}
