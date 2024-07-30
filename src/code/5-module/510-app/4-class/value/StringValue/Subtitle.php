<?php

function subtitle( $arg ) {

  return new_value( Subtitle::class, $arg );

}

class Subtitle extends StringValue {}

class NullSubtitle extends Subtitle {

  use NullValue;

}
