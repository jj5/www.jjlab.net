<?php

function slug( $arg ) {

  return new_value( Slug::class, $arg );

}

class Slug extends StringValue {}

class NullSlug extends Slug {

  use NullValue;

}
