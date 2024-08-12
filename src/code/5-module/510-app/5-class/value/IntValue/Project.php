<?php

// 2024-01-25 jj5 - TODO: rename to ProjectNumber

function project( $arg ) {

  // 2024-08-01 jj5 - HACK! I need to do it this way because I have since made values single-valued only, and I'm still
  // thinking about what we should do here...

  // 2024-08-01 jj5 - NOTE: to support composite values I think we want to pass either a list or a map as the $arg here.
  // Do it that way so that the implementation of the typical case (single-valued) is efficient and doesn't need to use
  // fung_get_args() et al.

  $args = func_get_args();

  $result = new_value( Project::class, $arg );

  $result->total = $args[ 1 ];

  return $result;

}

class Project extends IntValue {

  public $total = null;

  public function to_string() : string { return $this->get_value() . '/' . $this->total; }

  public function format( mixed $spec = null ) : string {

    return $this->get_value() . '/' . $this->total;
    
  }
}

class NullProject extends Project {

  use NullValue;

}
