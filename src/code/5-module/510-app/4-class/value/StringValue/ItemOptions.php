<?php

function item_options() {

  return new_value( ItemOptions::class, func_get_args() );

}

class ItemOptions extends StringValue {}

class NullItemOptions extends ItemOptions {

  use NullValue;

}
