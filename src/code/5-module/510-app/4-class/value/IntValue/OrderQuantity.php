<?php

function order_quantity() {

  return new_value( OrderQuantity::class, func_get_args() );

}

class OrderQuantity extends IntValue {

}

class NullOrderQuantity extends OrderQuantity {

  use NullValue;

}
