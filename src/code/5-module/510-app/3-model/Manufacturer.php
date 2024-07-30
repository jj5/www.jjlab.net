<?php

// 2024-01-25 jj5 - TODO: rename this class to something more appropriate...

class Manufacturer {

  public static function sort_alphabetical( &$list ) {

    usort(
      $list,
      function ( $a, $b ) {

        $a_name = $a->to_string();
        $b_name = $b->to_string();

        return strcasecmp( $a_name, $b_name );

      }
    );

  }
}


class ManufacturerContainer {

  protected $manufacturer_id;
  protected $manufacturer_name;
  protected $equipment_list;

  public function __construct( string $manufacturer_id, string $manufacturer_name ) {

    $this->manufacturer_id = $manufacturer_id;
    $this->manufacturer_name = $manufacturer_name;
    $this->equipment_list = [];

  }

  public function get_manufacturer_id() { return $this->manufacturer_id; }
  public function get_manufacturer_name() { return $this->manufacturer_name; }
  public function get_equipment_list() { return $this->equipment_list; }
  public function get_equipment_count() { return count( $this->get_equipment_list() ); }

  public function add_equipment( $equipment ) { $this->equipment_list[] = $equipment; }

  public function to_string() : string { return $this->manufacturer_name; }

}

function get_manufacturer_map( &$manufacturer_list = null ) {

  $manufacturer_list = [];
  $manufacturer_map = [];
  $manufacturer_count = [];

  $equipment_list = get_list( Equipment::class );

  foreach ( $equipment_list as $equipment ) {

    $manufacturer = $equipment->get_equipment_info()->get_manufacturer_name();

    if ( $manufacturer->is_null() ) { continue; }

    $manufacturer_name = $manufacturer->to_string();
    $manufacturer_id = get_html_id( $manufacturer_name );

    if ( ! array_key_exists( $manufacturer_id, $manufacturer_map ) ) {

      $manufacturer = new ManufacturerContainer( $manufacturer_id, $manufacturer_name );

      $manufacturer_list[] = $manufacturer;

      $manufacturer_map[ $manufacturer_id ] = $manufacturer;

    }

    $container = $manufacturer_map[ $manufacturer_id ];

    if ( array_key_exists( $manufacturer_id, $manufacturer_count ) ) {

      $manufacturer_count[ $manufacturer_id ]++;

    }
    else {

      $manufacturer_count[ $manufacturer_id ] = 1;

    }

    $container->add_equipment( $equipment );

  }

  Manufacturer::sort_alphabetical( $manufacturer_list );

  return $manufacturer_map;

}
