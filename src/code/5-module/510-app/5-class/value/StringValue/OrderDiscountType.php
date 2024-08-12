<?php

function order_discount_type( $arg ) {

  return new_value( OrderDiscountType::class, $arg );

}

class OrderDiscountType extends StringValue {}

class NullOrderDiscountType extends OrderDiscountType {

  use NullValue;

}
