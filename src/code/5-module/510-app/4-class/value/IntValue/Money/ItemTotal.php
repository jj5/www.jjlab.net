<?php

function item_total() {

  return new_value( ItemTotal::class, func_get_args() );

}

class ItemTotal extends Money {

  protected function copy( $money_string ) {

    return item_total( $money_string );

  }
}

class NullItemTotal extends ItemTotal {

  use NullValue;

}
