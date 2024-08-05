<?php

function show_slug( $arg ) {

  return new_value( ShowSlug::class, $arg );

}

class ShowSlug extends Slug {}

class NullShowSlug extends ShowSlug {

  use NullValue;

}
