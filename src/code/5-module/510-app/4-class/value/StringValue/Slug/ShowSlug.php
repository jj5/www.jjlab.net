<?php

function show_slug() {

  return new_value( ShowSlug::class, func_get_args() );

}

class ShowSlug extends Slug {}

class NullShowSlug extends ShowSlug {

  use NullValue;

}
