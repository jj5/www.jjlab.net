<?php

function title() {

  return new_value( Name::class, func_get_args() );

}

function name() {

  return new_value( Name::class, func_get_args() );

}

class Name extends StringValue {}

class NullName extends Name {

  use NullValue;

}
