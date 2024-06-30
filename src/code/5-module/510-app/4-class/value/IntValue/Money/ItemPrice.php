<?php

function item_price() {

  return new_value( ItemPrice::class, func_get_args() );

}

class ItemPrice extends Money {

  protected function copy( $money_string ) {

    return item_price( $money_string );

  }
}

class NullItemPrice extends ItemPrice {

  use NullValue;

}
