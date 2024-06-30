<?php

function affiliate_url() {

  return new_value( AffiliateUrl::class, func_get_args() );

}

class AffiliateUrl extends Url {}

class NullAffiliateUrl extends AffiliateUrl {

  use NullValue;

}
