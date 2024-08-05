<?php

function affiliate_name( $arg ) {

  return new_value( AffiliateName::class, $arg );

}

class AffiliateName extends Name {}

class NullAffiliateName extends AffiliateName {

  use NullValue;

  public function to_string() : string { return NULL_AFFILIATE_NAME; }

}
