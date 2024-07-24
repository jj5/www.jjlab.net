<?php

function subtitle() {

  return new_value( Subtitle::class, func_get_args() );

}

class Subtitle extends StringValue {}

class NullSubtitle extends Subtitle {

  use NullValue;

}
