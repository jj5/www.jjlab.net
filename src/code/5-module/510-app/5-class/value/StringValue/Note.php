<?php

function note( $arg ) {

  return new_value( Note::class, $arg );

}

class Note extends StringValue {}

class NullNote extends Note {

  use NullValue;

}
