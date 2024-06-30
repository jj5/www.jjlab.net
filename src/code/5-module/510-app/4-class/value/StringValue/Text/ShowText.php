<?php

function show_text() {

  return new_value( ShowText::class, func_get_args() );

}

class ShowText extends Text {}

class NullShowText extends ShowText {

  use NullValue;

}
