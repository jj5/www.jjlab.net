<?php

class EquipmentObject extends MudObject{

  public $parent = null;

  public $value = null;
  public function __construct(
    int $item_id = 0,
    array $args = [],
    public EquipmentFeature|null $equipment_feature = null,
    public EquipmentClass|null $equipment_class = null,
    public array $feature_list = [],
    public array $attribute_list = [],
    public array $connectivity_list = [],
    public array $measure_list = [],
    public array $function_list = [],
  ) {

    parent::__construct( $item_id, $args );

  }

  public function set_parent( IMudNode $parent ) : void { $this->parent = $parent; }

  public function build_category_map( &$map ) {

    global $g_equipment_map;

    foreach ( $this->feature_list as $feature ) {

      $equipment = $g_equipment_map[ $feature->value ];

      if ( $equipment === $this ) { continue; }

      $equipment->build_category_map( $map );

    }

    foreach(
      [
        $this->feature_list,
        $this->attribute_list,
        $this->connectivity_list,
        //$this->measure_list,
        //$this->function_list,
      ]
      as
      $list
    ) {

      foreach ( $list as $enum ) {

        // 2024-08-04 jj5 - NOTE: an equipment feature of "feature" is just for grouping...
        // 2024-08-04 jj5 - NOTE: we don't want to show it in the category list...
        //
        if ( $enum === EquipmentFeature::FEATURE ) { continue; }

        $map[ $enum->value ] = category( get_string( $enum ) );

      }
    }
  }  
}

class NullEquipmentObject extends EquipmentObject {

  use NullThingMixin;

}
