<?php

interface ILinkedList {

  public function get_next();
  public function get_prev();
  public function set_next( $next );
  public function set_prev( $prev );
  public function find_next( $class );
  public function find_prev( $class );

}
