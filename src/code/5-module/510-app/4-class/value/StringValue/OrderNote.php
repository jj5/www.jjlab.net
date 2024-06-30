<?php

function order_note() {

  return new_value( OrderNote::class, func_get_args() );

}

class OrderNote extends StringValue {}

class NullOrderNote extends OrderNote {

  use NullValue;

}
