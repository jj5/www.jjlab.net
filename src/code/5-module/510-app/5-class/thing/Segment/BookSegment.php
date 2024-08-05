<?php

abstract class BookSegment extends Segment {

  public function get_book() { return $this->get( Book::class ); }

  public function get_name() {
    
    $book = $this->get_book();

    $title = $book->get_title();

    $edition = $book->get_edition();

    if ( $edition->is_null() || $edition->get_value() === 1 ) {

      $edition_name = '';

    }
    else {

      $edition_name = ' ' . $edition->to_string();

    }

    return $title . $edition_name . ' (' . $this->get_book()->get_copyright_year() . ')';
    
  }
}
