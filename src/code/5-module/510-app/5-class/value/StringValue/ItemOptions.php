<?php

function item_options( $arg ) {

  return new_value( ItemOptions::class, $arg );

}

class ItemOptions extends StringValue {}

class NullItemOptions extends ItemOptions {

  use NullValue;

}
