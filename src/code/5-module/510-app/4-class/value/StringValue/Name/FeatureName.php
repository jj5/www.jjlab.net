<?php

function feature_name() {

  return new_value( FeatureName::class, func_get_args() );

}

class FeatureName extends Name {}

class NullFeatureName extends FeatureName {

  use NullValue;

}
