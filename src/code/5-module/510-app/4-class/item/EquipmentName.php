<?php

function equipment_name() {

  return new_item( EquipmentName::class, func_get_args() );

}

class EquipmentName extends Item {

  public function get_manufacturer_name() { return $this->get( ManufacturerName::class ); }
  public function get_model_name() { return $this->get( ModelName::class ); }
  public function get_equipment_type() { return $this->get( EquipmentType::class ); }

  public function to_string() {

    $result = [];

    $part = $this->get_manufacturer_name()->to_string();

    if ( $part ) { $result[] = $part; }

    $part = $this->get_model_name()->to_string();

    if ( $part ) { $result[] = $part; }

    $part = $this->get_equipment_type()->to_string();

    if ( $part ) { $result[] = $part; }

    return implode( ' ', $result );

  }

  public function to_html() {

    return henc( $this->to_string() );

  }
}

class NullEquipmentName extends EquipmentName {

  use NullItemMixin;

}
