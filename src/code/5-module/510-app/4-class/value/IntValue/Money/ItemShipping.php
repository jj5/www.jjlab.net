<?php

function item_shipping( $arg ) {

  return new_value( ItemShipping::class, $arg );

}

class ItemShipping extends Money {

  protected function copy_price( IMudMoney $money ) {

    return item_shipping( $money );

  }
}

class NullItemShipping extends ItemShipping {

  use NullValue;

}
