<?php

function show_text( $arg ) {

  return new_value( ShowText::class, $arg );

}

class ShowText extends Text {}

class NullShowText extends ShowText {

  use NullValue;

}
