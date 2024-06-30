<?php

function equipment_url() {

  return new_value( EquipmentUrl::class, func_get_args() );

}

class EquipmentUrl extends Url {}

class NullEquipmentUrl extends EquipmentUrl {

  use NullValue;

}
