<?php

class ValueWrapper extends MudAtom {

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - private fields...
  //

  private IMudValue|null $value;


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-06-29 jj5 - constructor...
  //

  public function __construct( IMudValue|null $value = null ) {

    parent::__construct();

    $this->value = $value;

  }


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2024-07-30 jj5 - public instance methods...
  //

  public function is_null() : bool { return parent::get_value()->is_null(); }

  public function is_empty() : bool { return $this->get_value()->is_empty(); }

  public function is_zero() : bool { return $this->get_value()->is_zero(); }

  //public function is_integer( int $compare ) : bool { return $this->get_value()->is_integer( $compare ); }

  public function is_nan() : bool { return $this->get_value()->is_nan(); }

  public function to_bool() : bool { return $this->get_value()->to_bool(); }

  public function to_int() : int { return $this->get_value()->to_int(); }

  public function to_float() : float { return $this->get_value()->to_float(); }

  public function get_value() : mixed { return $this->value ?? mud_null_object(); }

  public function get_db_value() : int|float|string|null { return $this->get_value()->get_db_value(); }

  public function get_sort_value() : int|float|string|null { return $this->get_value()->get_sort_value(); }

  public function get_key() : string { return $this->get_value()->get_key(); }

  public function set_key( string $key ) : void { $this->get_value()->set_key( $key ); }

}
