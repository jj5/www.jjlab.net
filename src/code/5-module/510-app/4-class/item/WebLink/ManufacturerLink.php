<?php

function manufacturer_link() {

  return new_item( ManufacturerLink::class, func_get_args() );

}

class NullManufacturerLink extends ManufacturerLink {

  use NullItemMixin;

}

class ManufacturerLink extends WebLink {

}
