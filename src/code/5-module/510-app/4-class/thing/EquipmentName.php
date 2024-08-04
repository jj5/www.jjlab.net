<?php

function equipment_name() {

  return new_thing( EquipmentName::class, func_get_args() );

}

class EquipmentName extends AppThing {

  public function get_manufacturer_name() { return $this->get( ManufacturerName::class ); }
  public function get_model_name() { return $this->get( ModelName::class ); }
  public function get_equipment_type() { return $this->get( EquipmentType::class ); }

  public function to_string() : string {

    $result = [];

    $part = $this->get_manufacturer_name()->to_string();

    if ( $part ) { $result[] = $part; }

    $part = $this->get_model_name()->to_string();

    if ( $part ) { $result[] = $part; }

    $part = $this->get_equipment_type()->to_string();

    if ( $part ) { $result[] = $part; }

    return implode( ' ', $result );

  }

  public function to_id() : string {

    $result = [];

    $part = self::clean( $this->get_manufacturer_name()->to_string() );

    if ( $part ) { $result[] = $part; }

    $part = self::clean( $this->get_model_name()->to_string() );

    if ( $part ) { $result[] = $part; }

    $part = self::clean( $this->get_equipment_type()->to_string() );

    if ( $part ) { $result[] = $part; }

    return implode( ' ', $result );

  }

  private static function clean( string $string ) : string {

    return str_replace( "'", '', $string );

  }

  public function to_html( mixed $format = null ) : string {

    return henc( $this->to_string() );

  }
}

class NullEquipmentName extends EquipmentName {

  use NullThingMixin;

}
