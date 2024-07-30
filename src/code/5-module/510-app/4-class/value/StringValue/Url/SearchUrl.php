<?php

function search_url( $arg ) {

  return new_value( SearchUrl::class, $arg );

}

class SearchUrl extends Url {}

class NullSearchUrl extends SearchUrl {

  use NullValue;

}
