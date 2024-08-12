<?php

function affiliate_url( $arg ) {

  return new_value( AffiliateUrl::class, $arg );

}

class AffiliateUrl extends Url {}

class NullAffiliateUrl extends AffiliateUrl {

  use NullValue;

}
