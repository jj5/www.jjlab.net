<?php

trait NullValue {

  use NullItemMixin;

  public function get_value() { return null; }

  public function to_string() { return ''; }

}
