<?php

function see_also() {

  return new_value( SeeAlso::class, func_get_args() );

}

class SeeAlso extends Url {

  public function render() {

    $href = url_base() . '/equipment.php#' . get_html_id( $this->to_string() );

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
