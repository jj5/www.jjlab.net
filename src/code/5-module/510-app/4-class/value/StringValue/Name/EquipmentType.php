<?php

function equipment_type() {

  return new_value( EquipmentType::class, func_get_args() );

}

class EquipmentType extends Name {}

class NullEquipmentType extends EquipmentType {

  use NullValue;

}
