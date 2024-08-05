<?php

function item_total( $arg ) {

  return new_value( ItemTotal::class, $arg );

}

class ItemTotal extends Money {

  protected function copy_price( IMudMoney $money ) {

    return item_total( $money );

  }
}

class NullItemTotal extends ItemTotal {

  use NullValue;

}
