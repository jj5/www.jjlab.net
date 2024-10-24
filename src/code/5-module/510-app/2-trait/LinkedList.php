<?php

trait LinkedList {

  private $next = null;

  private $prev = null;

  public function get_next() {

    if ( $this->next === null ) {

      $this->next = AppData::get_null( get_class( $this ) );

    }

    return $this->next;

  }

  public function get_prev() {

    if ( $this->prev === null ) {

      $this->prev = AppData::get_null( get_class( $this ) );

    }

    return $this->prev;

  }

  public function set_next( $next ) {

    assert( $this->next === null );

    $this->next = $next;

    assert( $next->prev === null );

    $next->prev = $this;

  }

  public function set_prev( $prev ) {

    assert( $this->prev === null );

    $this->prev = $prev;

    assert( $prev->next === null );

    $prev->next = $this;

  }

  public function find_next( $class ) {

    $next = $this->get_next();

    while ( $next ) {

      if ( is_a( $next, $class ) ) { return $next; }

      $next = $next->get_next();

    }

    return null;

  }

  public function find_prev( $class ) {

    $prev = $this->get_prev();

    while ( $prev ) {

      if ( is_a( $prev, $class ) ) { return $prev; }

      $prev = $prev->get_prev();

    }

    return null;

  }
}
