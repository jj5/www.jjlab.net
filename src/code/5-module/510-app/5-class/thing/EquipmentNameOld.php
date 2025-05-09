<?php

/*
function equipment_name() {

  return new_thing( EquipmentNameOld::class, func_get_args() );

}
*/

class EquipmentNameOld extends AppThing {

  public function get_manufacturer_name() { return $this->get( ManufacturerName::class ); }
  public function get_model_name() { return $this->get( ModelName::class ); }
  public function get_model_spec() { return $this->get( ModelSpec::class ); }
  public function get_equipment_type() { return $this->get( EquipmentType::class ); }

  private $string = null;

  public function to_string() : string {

    if ( $this->string === null ) {

      $result = [];

      // 2025-01-14 jj5 - NEW:
      foreach ( $this->get_child_list() as $child ) {

        if (
          is_a( $child, ManufacturerName::class ) ||
          is_a( $child, ModelName::class        ) ||
          is_a( $child, ModelSpec::class        ) ||
          is_a( $child, EquipmentType::class    )
        ) {

          $part = $child->to_string();

          if ( $part ) { $result[] = $part; }

        }
      }
      // 2025-01-14 jj5 - OLD:
      /*
      $part = $this->get_manufacturer_name()->to_string();

      if ( $part ) { $result[] = $part; }

      $part = $this->get_model_name()->to_string();

      if ( $part ) { $result[] = $part; }

      $part = $this->get_equipment_type()->to_string();

      if ( $part ) { $result[] = $part; }
      */

      $this->string = implode( ' ', $result );

    }

    return $this->string;

  }

  private $id = null;

  public function to_id() : string {

    if ( $this->id === null ) {

      $result = [];

      // 2025-01-14 jj5 - NEW:
      foreach ( $this->get_child_list() as $child ) {

        if (
          is_a( $child, ManufacturerName::class ) ||
          is_a( $child, ModelName::class        ) ||
          is_a( $child, ModelSpec::class        ) ||
          is_a( $child, EquipmentType::class    )
        ) {

          $part = self::clean( $child->to_string() );

          if ( $part ) { $result[] = $part; }

        }
      }
      // 2025-01-14 jj5 - OLD:
      /*
      $part = self::clean( $this->get_manufacturer_name()->to_string() );

      if ( $part ) { $result[] = $part; }

      $part = self::clean( $this->get_model_name()->to_string() );

      if ( $part ) { $result[] = $part; }

      $part = self::clean( $this->get_equipment_type()->to_string() );

      if ( $part ) { $result[] = $part; }
      */

      $this->id = implode( ' ', $result );

    }

    return $this->id;

  }

  private $html_id = null;

  function get_html_id() {

    if ( $this->html_id === null ) {

      $this->html_id = get_html_id( $this->to_id() );

    }

    return $this->html_id;

  }

  private static function clean( string $string ) : string {

    return str_replace( "'", '', $string );

  }

  public function to_html( mixed $format = null ) : string {

    return henc( $this->to_string() );

  }
}

class NullEquipmentNameOld extends EquipmentNameOld {

  use NullThingMixin;

}
