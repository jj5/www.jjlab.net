<?php

function sponsor_name( $arg ) {

  return new_value( SponsorName::class, $arg );

}

class SponsorName extends Name {}

class NullSponsorName extends SponsorName {

  use NullValue;

}
