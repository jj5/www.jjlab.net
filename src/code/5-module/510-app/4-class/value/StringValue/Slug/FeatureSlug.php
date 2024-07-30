<?php

function feature_slug( $arg ) {

  return new_value( FeatureSlug::class, $arg );

}

class FeatureSlug extends Slug {}

class NullFeatureSlug extends FeatureSlug {

  use NullValue;

}
