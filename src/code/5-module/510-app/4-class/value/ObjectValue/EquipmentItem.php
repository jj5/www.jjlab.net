<?php

global $g_equipment_class_alias_list;
$g_equipment_class_alias_list = [];

global $g_equipment_map;
$g_equipment_map = [];

function equipment_item( ...$args ) {

  global $g_equipment_map;

  $map = read_enums( $args );

  $feature_list = $map[ EquipmentFeature::class ];

  unset( $map[ EquipmentFeature::class ] );

  $equipment_type = $feature_list[ 0 ];

  $new_args = [ $g_equipment_map[ $equipment_type->value ] ];

  $new_args = array_merge( $new_args, $map[ 'other' ] ?? [] );

  unset( $map[ 'other' ] );

  $new_args[] = equipment_type( get_string( $equipment_type ) );

  $category_map = [];

  foreach ( $feature_list as $feature ) {

    //$new_args[] = category( get_string( $feature ) );

    $equipment = $g_equipment_map[ $feature->value ];

    $equipment->build_category_map( $category_map );

  }

  $new_args = array_merge( $new_args, array_values( $category_map ) );

  foreach ( $map as $key => $list ) {

    foreach ( $list as $value ) {

      if ( array_key_exists( $value->value, $category_map ) ) { continue; }

      $new_args[] = category( get_string( $value ) );

    }
  }

  return new_thing( EquipmentInfo::class, $new_args );

}

function read_enums( array $args ) {

  $result = [];

  foreach ( $args as $arg ) {

    if ( is_a( $arg, BackedEnum::class ) ) {

      $result[ get_class( $arg ) ][] = $arg;

    }
    else {

      $result[ 'other' ][] = $arg;

    }
  }

  return $result;

}

function get_string( $thing ) {

  if ( is_a( $thing, BackedEnum::class ) ) {

    $value = $thing->value;

  }
  else {

    $value = strval( $thing );

  }

  switch ( $value ) {

    case EquipmentConnectivity::WIFI->value:

      return 'Wi-Fi';

    case EquipmentAttribute::HEART->value:
    
      return '❤️';

    case EquipmentAttribute::HEAD_MOUNTED->value:
    
      return 'Head-Mounted';

    case EquipmentFeature::VOLTMETER_AC->value:
    
      return 'Voltmeter (AC)';

    case EquipmentFeature::VOLTMETER_DC->value:
    
      return 'Voltmeter (DC)';

    case EquipmentFeature::AMMETER_AC->value:
    
      return 'Ammeter (AC)';

    case EquipmentFeature::AMMETER_DC->value:
    
      return 'Ammeter (DC)';

    case EquipmentFeature::HEAD_MOUNTED_MAGNIFIER->value:
    
      return 'Head-Mounted Magnifier';

    case EquipmentFeature::MULTI_VISE->value:
    
      return 'Multi-Vise';

    case EquipmentFeature::COUNTER_TOTALIZER->value:
    
      return 'Counter/Totalizer';

  }

  $parts = explode( '-', $value );

  $result = [];

  foreach ( $parts as $part ) {

    $result[] = ucfirst( $part );

  }

  return implode( ' ', $result );

}

function equipment_class_alias( $class, $alias ) {

  global $g_equipment_class_alias_list;

  $g_equipment_class_alias_list[ $class->value ][] = $alias;

}

function equipment_define(
  EquipmentFeature $equipment_feature,
  EquipmentClass|EquipmentFeature $inherits,
  ...$args,
) {

  global $g_equipment_map;

  assert( ! array_key_exists( $equipment_feature->value, $g_equipment_map ) );

  $enums = read_enums( $args );

  $feature_list = merge_enum_list( [ $equipment_feature ], $enums[ EquipmentFeature::class ] ?? [] );
  $attribute_list = $enums[ EquipmentAttribute::class ] ?? [];
  $connectivity_list = $enums[ EquipmentConnectivity::class ] ?? [];
  $measure_list = $enums[ EquipmentMeasure::class ] ?? [];
  $function_list = $enums[ EquipmentFunction::class ] ?? [];

  if ( is_a( $inherits, EquipmentClass::class ) ) {

    $result = new EquipmentObject(
      0,
      [],
      $equipment_feature,
      $inherits,
      $feature_list,
      $attribute_list,
      $connectivity_list,
      $measure_list,
      $function_list,
    );

  }
  else {

    $inherits_feature = $g_equipment_map[ $inherits->value ];

    $feature_list[] = $inherits_feature->equipment_feature;

    $result = new EquipmentObject(
      0,
      [],
      $equipment_feature,
      $inherits_feature->equipment_class,
      merge_enum_list( $inherits_feature->feature_list, $feature_list ),
      merge_enum_list( $inherits_feature->attribute_list, $attribute_list ),
      merge_enum_list( $inherits_feature->connectivity_list, $connectivity_list ),
      merge_enum_list( $inherits_feature->measure_list, $measure_list ),
      merge_enum_list( $inherits_feature->function_list, $function_list ),
    );

  }

  $g_equipment_map[ $equipment_feature->value ] = $result;

  return $result;

}

function merge_enum_list( ...$args ) {

  $result = [];

  foreach ( $args as $list ) {

    foreach ( $list as $enum ) {

      $result[ $enum->value ] = $enum;

    }
  }

  return array_values( $result );

}

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
