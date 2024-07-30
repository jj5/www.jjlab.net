<?php

function order_item_name( $arg ) {

  return new_value( OrderItemName::class, $arg );

}

class OrderItemName extends StringValue {}

class NullOrderItemName extends OrderItemName {

  use NullValue;

}
