<?php

function order_id() {

  return new_value( OrderId::class, func_get_args() );

}

class OrderId extends StringValue {}

class NullOrderId extends OrderId {

  use NullValue;

}
