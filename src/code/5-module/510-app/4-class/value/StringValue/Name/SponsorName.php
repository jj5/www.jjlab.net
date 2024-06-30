<?php

function sponsor_name() {

  return new_value( SponsorName::class, func_get_args() );

}

class SponsorName extends Name {}

class NullSponsorName extends SponsorName {

  use NullValue;

}
