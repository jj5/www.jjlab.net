<?php

function mini_project_number( $arg ) {

  return new_value( MiniProjectNumber::class, $arg );

}

class MiniProjectNumber extends ProjectNumber {

  public function __construct( int $value_id = 0, array $args = [] ) {

    parent::__construct( $value_id, $args );

  }

  public function to_string() : string {

    return 'JMP' . str_pad( $this->get_value(), 3, '0', STR_PAD_LEFT );

  }
}

class NullMiniProjectNumber extends MiniProjectNumber {

  use NullValue;

}
