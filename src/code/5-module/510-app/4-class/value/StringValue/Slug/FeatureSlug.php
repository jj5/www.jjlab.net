<?php

function feature_slug() {

  return new_value( FeatureSlug::class, func_get_args() );

}

class FeatureSlug extends Slug {}

class NullFeatureSlug extends FeatureSlug {

  use NullValue;

}
