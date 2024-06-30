<?php

function new_book() {

  return new_item( NewBook::class, func_get_args() );

}

class NullNewBook extends NewBook {

  use NullItemMixin;

}


class NewBook extends Book {

  public function is_new() { return true; }
  public function is_old() { return false;}

  public function get_type() { return 'New Book'; }

}
