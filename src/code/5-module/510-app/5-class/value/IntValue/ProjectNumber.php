<?php

function project_number( $arg ) {

  return new_value( ProjectNumber::class, $arg );

}

class ProjectNumber extends IntValue {

  public function __construct( int $value_id = 0, array $args = [] ) {

    parent::__construct( $value_id, $args );

  }

  public function to_string() : string {

    return '#' . $this->get_value();

  }
}

class NullProjectNumber extends ProjectNumber {

  use NullValue;

}
