<?php

function model_spec( $arg ) {

  return new_value( ModelSpec::class, $arg );

}

class ModelSpec extends Name {}

class NullModelSpec extends ModelSpec {

  use NullValue;

}
