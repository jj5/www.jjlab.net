<?php

function item_total() {

  return new_value( ItemTotal::class, func_get_args() );

}

class ItemTotal extends Money {

  protected function copy_price( IMudMoney $money ) {

    return item_total( $money );

  }
}

class NullItemTotal extends ItemTotal {

  use NullValue;

}
