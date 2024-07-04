<?php

trait NullItemMixin {

  public static function Instance() {

    static $instance_map = [];

    $class = self::class;

    $instance = $instance_map[ $class ] ?? null;

    if ( $instance === null ) {

      $instance = new $class;

      $instance_map[ $class ] = $instance;

    }

    return $instance;

  }

  public function is_null() : bool { return true; }
  public function is_empty() { return true; }
  public function get_item_id() { return 0; }
  public function set_parent( $parent ) { throw new Exception( 'Unsupported' ); }
  public function get_parent() { return $this; }

  public function get_next() { return $this; }
  public function get_prev() { return $this; }
  public function set_next( $next ) {}
  public function set_prev( $prev ) {}
  public function find_next( $class ) { return $this; }
  public function find_prev( $class ) { return $this; }

}
