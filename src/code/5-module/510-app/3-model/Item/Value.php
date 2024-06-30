<?php

class Value extends Item implements INullable {

  private $value;

  protected function __construct( int $item_id = 0, array $args = [], $value = null ) {

    parent::__construct( $item_id, $args );

    $this->value = $value;

  }

  public function is_empty() {

    return empty( $this->get_value() );

  }

  public function get_value() { return $this->value; }

  public function get_sort_value() { return $this->get_value(); }

  public function to_string() {

    return strval( $this->get_value() );

  }

  public function render() {

    tag_text( 'span', $this->to_string(), [ 'class' => 'value ' . get_class( $this ) ] );

  }
}
