<?php

function see_also( $arg ) {

  return new_value( SeeAlso::class, $arg );

}

class SeeAlso extends Url {

  private $html_id = null;

  public function get_html_id() {

    if ( $this->html_id === null ) {

      $this->html_id = get_html_id( $this->to_string() );

    }

    return $this->html_id;

  }

  public function render( mixed $format = null, array $attrs = [] ): void {

    $href = url_base() . '/equipment.php#' . $this->get_html_id();

    render_link_internal(
      $this->to_string(),
      $href,
      TITLE_LINK_EQUIPMENT,
    );

  }
}

class NullSeeAlso extends SeeAlso {

  use NullValue;

}
