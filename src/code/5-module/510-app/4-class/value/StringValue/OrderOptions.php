<?php

function order_options() {

  return new_value( OrderOptions::class, func_get_args() );

}

class OrderOptions extends StringValue {}

class NullOrderOptions extends OrderOptions {

  use NullValue;

}
