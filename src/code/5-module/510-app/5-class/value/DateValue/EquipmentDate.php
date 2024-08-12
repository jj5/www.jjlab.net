<?php

function equipment_date( $arg ) {

  return new_value( EquipmentDate::class, $arg );

}

class EquipmentDate extends DateValue {

}

class NullEquipmentDate extends EquipmentDate {

  use NullValue;

}
