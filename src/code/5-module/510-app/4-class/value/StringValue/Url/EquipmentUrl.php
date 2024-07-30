<?php

function equipment_url( $arg ) {

  return new_value( EquipmentUrl::class, $arg );

}

class EquipmentUrl extends Url {}

class NullEquipmentUrl extends EquipmentUrl {

  use NullValue;

}
