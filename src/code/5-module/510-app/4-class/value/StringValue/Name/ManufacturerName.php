<?php

function manufacturer_name() {

  return new_value( ManufacturerName::class, func_get_args() );

}

class ManufacturerName extends Name {

  private $manufacturer_id = null;

  public function get_manufacturer_id() {

    if ( $this->manufacturer_id === null ) {

      $this->manufacturer_id = get_html_id( $this->to_string() );

    }

    return $this->manufacturer_id;

  }

  public function render( mixed $format = null, array $attrs = [] ): void {

    $href = url_base() . '/manufacturer.php/' . $this->get_manufacturer_id();

    render_link_internal(
      $this->to_string(),
      $href,
      TITLE_LINK_MANUFACTURER,
    );

  }

}

class NullManufacturerName extends ManufacturerName {

  use NullValue;

}
