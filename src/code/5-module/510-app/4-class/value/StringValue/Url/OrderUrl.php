<?php

function order_url() {

  return new_value( OrderUrl::class, func_get_args() );

}

class OrderUrl extends Url {}

class NullOrderUrl extends OrderUrl {

  use NullValue;

}
