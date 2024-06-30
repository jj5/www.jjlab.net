<?php

function text() {

  return new_value( Text::class, func_get_args() );

}

class Text extends StringValue {}

class NullText extends Text {

  use NullValue;

}
