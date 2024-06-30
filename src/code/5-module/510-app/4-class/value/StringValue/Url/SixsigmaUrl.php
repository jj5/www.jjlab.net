<?php

function sixsigma_url() {

  return new_value( SixsigmaUrl::class, func_get_args() );

}

class SixsigmaUrl extends Url {}

class NullSixsigmaUrl extends SixsigmaUrl {

  use NullValue;

}
