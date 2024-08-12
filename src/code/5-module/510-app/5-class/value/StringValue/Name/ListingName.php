<?php

function listing_name( $arg ) {

  return new_value( ListingName::class, $arg );

}

class ListingName extends Name {}

class NullListingName extends ListingName {

  use NullValue;

}
