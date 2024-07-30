<?php

function item_shipping() {

  return new_value( ItemShipping::class, func_get_args() );

}

class ItemShipping extends Money {

  protected function copy_price( IMudMoney $money ) {

    return item_shipping( $money );

  }
}

class NullItemShipping extends ItemShipping {

  use NullValue;

}
