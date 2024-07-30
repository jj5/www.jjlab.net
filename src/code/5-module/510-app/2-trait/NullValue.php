<?php

trait NullValue {

  use NullThingMixin;

  //public function get_value() : mixed { return null; }

  public function to_string() : string { return ''; }

}
