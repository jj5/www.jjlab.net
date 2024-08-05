<?php

function warning( $arg ) {

  return new_value( Warning::class, $arg );

}

class Warning extends StringValue {}

class NullWarning extends Warning {

  use NullValue;

}
