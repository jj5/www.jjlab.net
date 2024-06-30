<?php

function show_name() {

  return new_value( ShowName::class, func_get_args() );

}

class ShowName extends Name {}

class NullShowName extends ShowName {

  use NullValue;

}
