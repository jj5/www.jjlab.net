<?php

function equipment_type( $arg ) {

  return new_value( EquipmentType::class, $arg );

}

class EquipmentType extends Name {}

class NullEquipmentType extends EquipmentType {

  use NullValue;

}
