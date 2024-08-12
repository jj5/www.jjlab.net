<?php

function author( $arg ) {

  return new_value( Author::class, $arg );

}

class Author extends Name {

  private $count = null;

  public function get_count() {

    if ( $this->count === null ) {

      $this->count = count( explode( ',', $this->get_value() ) );

    }

    return $this->count;

  }

}

class NullAuthor extends Author {

  use NullValue;

}
