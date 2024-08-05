<?php

function order_id( $arg ) {

  return new_value( OrderId::class, $arg );

}

class OrderId extends StringValue {}

class NullOrderId extends OrderId {

  use NullValue;

}
