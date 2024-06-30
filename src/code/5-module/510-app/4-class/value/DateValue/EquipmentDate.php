<?php

function equipment_date() {

  return new_value( EquipmentDate::class, func_get_args() );

}

class EquipmentDate extends DateValue {

}

class NullEquipmentDate extends EquipmentDate {

  use NullValue;

}
