<?php

function model_name( $arg ) {

  return new_value( ModelName::class, $arg );

}

class ModelName extends Name {}

class NullModelName extends ModelName {

  use NullValue;

}
