<?php

function warning() {

  return new_value( Warning::class, func_get_args() );

}

class Warning extends StringValue {}

class NullWarning extends Warning {

  use NullValue;

}
