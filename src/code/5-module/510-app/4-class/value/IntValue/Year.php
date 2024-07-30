<?php

class Year extends IntValue {

  public function format( mixed $spec = null ) : string {
    
    return strval( $this->get_int() );

  }
}
