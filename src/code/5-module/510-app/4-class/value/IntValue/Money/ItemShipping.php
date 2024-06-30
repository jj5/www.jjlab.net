<?php

function item_shipping() {

  return new_value( ItemShipping::class, func_get_args() );

}

class ItemShipping extends Money {

  protected function copy( $money_string ) {

    return item_shipping( $money_string );

  }
}

class NullItemShipping extends ItemShipping {

  use NullValue;

}
