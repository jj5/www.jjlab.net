<?php

function maxitronix_kit_name() {

  return new_value( MaxitronixKitName::class, func_get_args() );

}

class MaxitronixKitName extends Name {}

class NullMaxitronixKitName extends MaxitronixKitName {

  use NullValue;

}
