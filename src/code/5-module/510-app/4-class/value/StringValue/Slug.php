<?php

function slug() {

  return new_value( Slug::class, func_get_args() );

}

class Slug extends StringValue {}

class NullSlug extends Slug {

  use NullValue;

}
