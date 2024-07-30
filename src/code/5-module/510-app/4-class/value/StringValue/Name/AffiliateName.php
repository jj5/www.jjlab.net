<?php

function affiliate_name() {

  return new_value( AffiliateName::class, func_get_args() );

}

class AffiliateName extends Name {}

class NullAffiliateName extends AffiliateName {

  use NullValue;

  public function to_string() : string { return NULL_AFFILIATE_NAME; }

}
