<?php

function show_name( $arg ) {

  return new_value( ShowName::class, $arg );

}

class ShowName extends Name {}

class NullShowName extends ShowName {

  use NullValue;

}
