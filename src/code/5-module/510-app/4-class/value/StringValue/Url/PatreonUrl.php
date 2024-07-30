<?php

function patreon_url( $arg ) {

  return new_value( PatreonUrl::class, $arg );

}

class PatreonUrl extends Url {}

class NullPatreonUrl extends PatreonUrl {

  use NullValue;

}
