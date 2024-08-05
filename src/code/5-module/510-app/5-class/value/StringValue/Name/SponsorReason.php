<?php

function sponsor_reason( $arg ) {

  return new_value( SponsorReason::class, $arg );

}

class SponsorReason extends StringValue {}

class NullSponsorReason extends SponsorReason {

  use NullValue;

}
