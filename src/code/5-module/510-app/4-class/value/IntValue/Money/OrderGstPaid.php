<?php

// 2024-01-16 jj5 - GST paid is already included in product price

function order_gst_paid() {

  return new_value( OrderGstPaid::class, func_get_args() );

}

class OrderGstPaid extends Money {

  protected function copy( $money_string ) {

    return order_gst_paid( $money_string );

  }
}

class NullOrderGstPaid extends OrderGstPaid {

  use NullValue;

}
