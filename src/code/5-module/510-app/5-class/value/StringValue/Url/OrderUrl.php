<?php

function order_url( $arg ) {

  return new_value( OrderUrl::class, $arg );

}

class OrderUrl extends Url {}

class NullOrderUrl extends OrderUrl {

  use NullValue;

}
