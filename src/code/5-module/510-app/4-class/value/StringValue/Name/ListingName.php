<?php

function listing_name() {

  return new_value( ListingName::class, func_get_args() );

}

class ListingName extends Name {}

class NullListingName extends ListingName {

  use NullValue;

}
