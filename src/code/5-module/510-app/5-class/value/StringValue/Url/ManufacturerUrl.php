<?php

function manufacturer_url( $arg ) {

  return new_value( ManufacturerUrl::class, $arg );

}

class ManufacturerUrl extends Url {}

class NullManufacturerUrl extends ManufacturerUrl {

  use NullValue;

}
