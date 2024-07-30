<?php

// 2024-01-25 jj5 - TODO: rename to ProjectNumber

function project() {

  return new_value( Project::class, func_get_args() );

}

class Project extends IntValue {

  protected $total = null;

  public function __construct( int $value_id = 0, array $args = [] ) {

    if ( count( $args ) ) {

      $total = intval( $args[ 1 ] );

      $this->total = $total;

    }

    parent::__construct( $value_id, $args );

  }

  public function to_string() : string { return $this->get_value() . '/' . $this->total; }

}

class NullProject extends Project {

  use NullValue;

}
