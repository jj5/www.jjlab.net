<?php

function manufacturer_url() {

  return new_value( ManufacturerUrl::class, func_get_args() );

}

class ManufacturerUrl extends Url {}

class NullManufacturerUrl extends ManufacturerUrl {

  use NullValue;

}
