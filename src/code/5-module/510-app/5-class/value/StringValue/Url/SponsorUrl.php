<?php

function sponsor_url( $arg ) {

  return new_value( SponsorUrl::class, $arg );

}

class SponsorUrl extends Url {}

class NullSponsorUrl extends SponsorUrl {

  use NullValue;

}
