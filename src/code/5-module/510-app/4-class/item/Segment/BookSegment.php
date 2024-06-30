<?php

abstract class BookSegment extends Segment {

  public function get_book() { return $this->get( Book::class ); }

  public function get_name() {
    
    return $this->get_book()->get_name() . ' (' . $this->get_book()->get_copyright_year() . ')';
    
  }

}
