<?php

function item_price() {

  return new_value( ItemPrice::class, func_get_args() );

}

class ItemPrice extends Money {

  protected function copy_price( IMudMoney $money ) {

    return item_price( $money );

  }
}

class NullItemPrice extends ItemPrice {

  use NullValue;

}
