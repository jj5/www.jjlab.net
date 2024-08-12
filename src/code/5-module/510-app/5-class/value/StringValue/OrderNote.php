<?php

function order_note( $arg ) {

  return new_value( OrderNote::class, $arg );

}

class OrderNote extends StringValue {}

class NullOrderNote extends OrderNote {

  use NullValue;

}
