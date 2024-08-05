<?php

function order_date( $arg ) {

  return new_value( OrderDate::class, $arg );

}

class OrderDate extends DateValue {

}

class NullOrderDate extends OrderDate {

  use NullValue;

}
