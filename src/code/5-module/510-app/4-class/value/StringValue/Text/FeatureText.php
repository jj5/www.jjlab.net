<?php

function feature_text() {

  return new_value( FeatureText::class, func_get_args() );

}

class FeatureText extends Text {}

class NullFeatureText extends FeatureText {

  use NullValue;

}
