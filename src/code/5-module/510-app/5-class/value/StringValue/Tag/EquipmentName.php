<?php

function equipment_name( string $arg ) {

  static $map = [];

  if ( isset( $map[ $arg ] ) ) {

    // 2025-01-08 jj5 - TODO: re-enable this check

    //mud_fail( 'duplicate equipment name detected.', [ 'arg' => $arg ] );

  }

  $map[ $arg ] = new_value( EquipmentName::class, $arg );

  return $map[ $arg ];

}

class EquipmentName extends Tag {}

class NullEquipmentName extends EquipmentName {

  use NullValue;

}
