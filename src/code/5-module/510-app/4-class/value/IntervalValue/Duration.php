<?php

function duration() {

  return new_value( Duration::class, func_get_args() );

}

class Duration extends IntervalValue {

}

class NullDuration extends Duration {

  use NullValue;

}
