<?php

function sixsigma_url( $arg ) {

  return new_value( SixsigmaUrl::class, $arg );

}

class SixsigmaUrl extends Url {}

class NullSixsigmaUrl extends SixsigmaUrl {

  use NullValue;

}
