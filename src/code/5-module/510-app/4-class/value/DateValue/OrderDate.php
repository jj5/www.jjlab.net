<?php

function order_date() {

  return new_value( OrderDate::class, func_get_args() );

}

class OrderDate extends DateValue {

}

class NullOrderDate extends OrderDate {

  use NullValue;

}
