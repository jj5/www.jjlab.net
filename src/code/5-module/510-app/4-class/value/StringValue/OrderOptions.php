<?php

function order_options( $arg ) {

  return new_value( OrderOptions::class, $arg );

}

class OrderOptions extends StringValue {}

class NullOrderOptions extends OrderOptions {

  use NullValue;

}
