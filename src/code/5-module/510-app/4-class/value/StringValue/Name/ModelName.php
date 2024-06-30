<?php

function model_name() {

  return new_value( ModelName::class, func_get_args() );

}

class ModelName extends Name {}

class NullModelName extends ModelName {

  use NullValue;

}
