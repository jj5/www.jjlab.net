<?php

function feature_name( $arg ) {

  return new_value( FeatureName::class, $arg );

}

class FeatureName extends Name {}

class NullFeatureName extends FeatureName {

  use NullValue;

}
