<?php

function order_discount_type() {

  return new_value( OrderDiscountType::class, func_get_args() );

}

class OrderDiscountType extends StringValue {}

class NullOrderDiscountType extends OrderDiscountType {

  use NullValue;

}
