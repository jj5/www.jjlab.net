<?php

function maxitronix_kit_name( $arg ) {

  return new_value( MaxitronixKitName::class, $arg );

}

class MaxitronixKitName extends Name {}

class NullMaxitronixKitName extends MaxitronixKitName {

  use NullValue;

}
