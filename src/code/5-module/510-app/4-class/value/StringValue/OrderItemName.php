<?php

function order_item_name() {

  return new_value( OrderItemName::class, func_get_args() );

}

class OrderItemName extends StringValue {}

class NullOrderItemName extends OrderItemName {

  use NullValue;

}
