<?php

function item_price( $arg ) {

  return new_value( ItemPrice::class, $arg );

}

class ItemPrice extends Money {

  protected function copy_price( IMudMoney $money ) {

    return item_price( $money );

  }
}

class NullItemPrice extends ItemPrice {

  use NullValue;

}
