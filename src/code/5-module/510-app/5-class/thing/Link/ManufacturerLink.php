<?php

function manufacturer_link() {

  return new_thing( ManufacturerLink::class, func_get_args() );

}

class NullManufacturerLink extends ManufacturerLink {

  use NullThingMixin;

}

class ManufacturerLink extends Link {

}
