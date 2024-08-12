<?php

function order_quantity( $arg ) {

  return new_value( OrderQuantity::class, $arg );

}

class OrderQuantity extends IntValue {

}

class NullOrderQuantity extends OrderQuantity {

  use NullValue;

}
