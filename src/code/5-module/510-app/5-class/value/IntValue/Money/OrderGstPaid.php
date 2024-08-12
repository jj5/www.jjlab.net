<?php

// 2024-01-16 jj5 - GST paid is already included in product price

function order_gst_paid( $arg ) {

  return new_value( OrderGstPaid::class, $arg );

}

class OrderGstPaid extends Money {

  protected function copy_price( IMudMoney $money ) {

    return order_gst_paid( $money );

  }
}

class NullOrderGstPaid extends OrderGstPaid {

  use NullValue;

}
