<?php

function page_count() {

  return new_value( PageCount::class, func_get_args() );

}

class PageCount extends IntValue {}

class NullPageCount extends PageCount {

  use NullValue;

}
