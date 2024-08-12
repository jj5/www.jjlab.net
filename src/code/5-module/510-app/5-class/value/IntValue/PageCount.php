<?php

function page_count( $arg ) {

  return new_value( PageCount::class, $arg );

}

class PageCount extends IntValue {}

class NullPageCount extends PageCount {

  use NullValue;

}
