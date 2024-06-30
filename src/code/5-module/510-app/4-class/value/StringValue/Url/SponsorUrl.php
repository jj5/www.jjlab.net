<?php

function sponsor_url() {

  return new_value( SponsorUrl::class, func_get_args() );

}

class SponsorUrl extends Url {}

class NullSponsorUrl extends SponsorUrl {

  use NullValue;

}
