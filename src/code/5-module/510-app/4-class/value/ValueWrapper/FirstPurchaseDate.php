<?php

function first_purchase_date() {

  return new_value( FirstPurchaseDate::class, func_get_args() );

}

class FirstPurchaseDate extends ValueWrapper {

  public function render_definition() {

    tag_text( 'dt', 'First purchase' );

    if ( $this->is_empty() ) {

      $title  = 'It is unknown when this equipment was first purchased.';
      $text   = 'Unknown';

    }
    else {

      $date = $this->get_value()->format( DATE_FORMAT );

      $title  = "This equipment was first purchased on $date.";
      $text   = "$date";

    }

    tag_text( 'dd', $text, [ 'title' => $title ] );

  }

  public function render_span() {

    if ( $this->is_empty() ) {

      $title  = 'It is unknown when this equipment was first purchased.';
      $text   = 'First purchase: Unknown';

    }
    else {

      $date = $this->get_value()->format( DATE_FORMAT );

      $title  = "This equipment was first purchased on $date.";
      $text   = "First purchase: $date";

    }

    tag_text( 'span', $text, [ 'title' => $title ] );

  }

  public function to_html() {

    nip_init();

      $this->render_span();

    nip_done( $result );

    return $result;

  }

  public function getTimestamp() { return $this->get_value()->get_timestamp(); }

}

class NullFirstPurchaseDate extends FirstPurchaseDate {

  use NullValue;

}
