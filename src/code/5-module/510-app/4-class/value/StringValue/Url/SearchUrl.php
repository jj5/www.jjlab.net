<?php

function search_url() {

  return new_value( SearchUrl::class, func_get_args() );

}

class SearchUrl extends Url {}

class NullSearchUrl extends SearchUrl {

  use NullValue;

}
