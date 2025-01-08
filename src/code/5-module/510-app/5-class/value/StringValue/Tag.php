<?php

function tag( $arg ) {

  return new_value( Tag::class, $arg );

}

class Tag extends StringValue {}

class NullTag extends Tag {

  use NullValue;

}
