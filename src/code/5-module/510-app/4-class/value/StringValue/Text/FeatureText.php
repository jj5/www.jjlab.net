<?php

function feature_text( $arg ) {

  return new_value( FeatureText::class, $arg );

}

class FeatureText extends Text {}

class NullFeatureText extends FeatureText {

  use NullValue;

}
