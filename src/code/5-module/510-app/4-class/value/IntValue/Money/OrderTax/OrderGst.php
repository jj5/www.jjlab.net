<?php

function order_gst() {

  return new_value( OrderGst::class, func_get_args() );

}

class OrderGst extends OrderTax {

  protected function copy_price( IMudMoney $money ) {

    return order_gst( $money );

  }
}

class NullOrderGst extends OrderGst {

  use NullValue;

}
