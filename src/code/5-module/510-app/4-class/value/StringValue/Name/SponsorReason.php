<?php

function sponsor_reason() {

  return new_value( SponsorReason::class, func_get_args() );

}

class SponsorReason extends StringValue {}

class NullSponsorReason extends SponsorReason {

  use NullValue;

}
