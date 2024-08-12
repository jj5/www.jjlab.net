<?php

function old_book() {

  return new_thing( OldBook::class, func_get_args() );

}

class NullOldBook extends OldBook {

  use NullThingMixin;

}

class OldBook extends Book {

  public function is_new() { return false; }
  public function is_old() { return true;}

  public function get_type() { return 'Old Book'; }

}
