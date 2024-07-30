<?php

function text( $arg ) {

  return new_value( Text::class, $arg );

}

class Text extends StringValue {}

class NullText extends Text {

  use NullValue;

}
