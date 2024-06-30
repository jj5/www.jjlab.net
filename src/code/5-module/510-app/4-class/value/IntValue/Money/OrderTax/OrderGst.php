<?php

function order_gst() {

  return new_value( OrderGst::class, func_get_args() );

}

class OrderGst extends OrderTax {

  protected function copy( $money_string ) {

    return order_gst( $money_string );

  }
}

class NullOrderGst extends OrderGst {

  use NullValue;

}
