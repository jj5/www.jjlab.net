<?php

class CategoryContainer {

  protected $category_id;
  protected $category_name;
  protected $equipment_list;

  public function __construct( string $category_id, string $category_name ) {

    $this->category_id = $category_id;
    $this->category_name = $category_name;
    $this->equipment_list = [];

  }

  public function get_category_id() { return $this->category_id; }
  public function get_category_name() { return $this->category_name; }
  public function get_equipment_list() { return $this->equipment_list; }
  public function get_equipment_count() { return count( $this->get_equipment_list() ); }

  public function add_equipment( $equipment ) { $this->equipment_list[] = $equipment; }

  public function to_string() : string { return $this->category_name; }

}

function get_category_map( &$category_list = null ) {

  $category_list = [];
  $category_map = [];
  $category_count = [];

  $equipment_list = get_list( Equipment::class );

  foreach ( $equipment_list as $equipment ) {

    foreach ( $equipment->get_category_list() as $category ) {

      $category_name = $category->to_string();
      $category_id = get_html_id( $category_name );

      if ( ! array_key_exists( $category_id, $category_map ) ) {

        $category = new CategoryContainer( $category_id, $category_name );

        $category_list[] = $category;

        $category_map[ $category_id ] = $category;

      }

      $container = $category_map[ $category_id ];

      if ( array_key_exists( $category_id, $category_count ) ) {

        $category_count[ $category_id ]++;

      }
      else {

        $category_count[ $category_id ] = 1;

      }

      $container->add_equipment( $equipment );

    }
  }

  Category::sort_alphabetical( $category_list );

  return $category_map;

}
