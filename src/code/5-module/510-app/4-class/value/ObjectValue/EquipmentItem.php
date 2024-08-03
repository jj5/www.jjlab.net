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

  $new_args = $map[ 'other' ];

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

    case Connectivity::BNC->value:

      return 'BNC';

    case Connectivity::USB->value:

      return 'USB';

    case Connectivity::WIFI->value:

      return 'Wi-Fi';

    case EquipmentAttribute::HEART->value:
    
      return '❤️';

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

  $feature_list = array_merge( [ $equipment_feature ], $enums[ EquipmentFeature::class ] ?? [] );
  $connectivity_list = $enums[ Connectivity::class ] ?? [];
  $measure_list = $enums[ Measure::class ] ?? [];
  $function_list = $enums[ EquipmentFunction::class ] ?? [];

  if ( is_a( $inherits, EquipmentClass::class ) ) {

    $result = new EquipmentObject(
      $equipment_feature,
      $inherits,
      $feature_list,
      $connectivity_list,
      $measure_list,
      $function_list,
    );

  }
  else {

    $inherits_feature = $g_equipment_map[ $inherits->value ];

    $feature_list[] = $inherits_feature->equipment_feature;

    $result = new EquipmentObject(
      $equipment_feature,
      $inherits_feature->equipment_class,
      array_merge( $inherits_feature->feature_list, $feature_list ),
      array_merge( $inherits_feature->connectivity_list, $connectivity_list ),
      array_merge( $inherits_feature->measure_list, $measure_list ),
      array_merge( $inherits_feature->function_list, $function_list ),
    );

  }

  $g_equipment_map[ $equipment_feature->value ] = $result;

  return $result;

}

class EquipmentObject {

  public function __construct(
    public EquipmentFeature $equipment_feature,
    public EquipmentClass $equipment_class,
    public array $feature_list = [],
    public array $connectivity_list = [],
    public array $measure_list = [],
    public array $function_list = [],
  ) {}

  public function build_category_map( &$map ) {

    foreach(
      [
        $this->feature_list,
        $this->connectivity_list,
        //$this->measure_list,
        //$this->function_list,
      ]
      as
      $list
    ) {

      foreach ( $list as $enum ) {

        $map[ $enum->value ] = category( get_string( $enum ) );

      }
    }
  }  
}
