<?php

function patreon_url() {

  return new_value( PatreonUrl::class, func_get_args() );

}

class PatreonUrl extends Url {}

class NullPatreonUrl extends PatreonUrl {

  use NullValue;

}
