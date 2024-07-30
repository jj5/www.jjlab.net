<?php

function title( $arg ) {

  return new_value( Name::class, $arg );

}

function name( $arg ) {

  return new_value( Name::class, $arg );

}

class Name extends StringValue {}

class NullName extends Name {

  use NullValue;

}
