<?php

function maxitronix_kit() {
  
  return new_thing( MaxitronixKit::class, func_get_args() );

}

class NullMaxitronixKit extends MaxitronixKit {
  
  use NullThingMixin;

}

class MaxitronixKit extends Kit {

  public function get_name() { return 'Maxitronix ' . $this->get_kit_name(); }

  public function get_link() { return url_base() . '/feature.php/maxitronix-' . $this->get_kit_name(); }

  public function get_title() {

    $name = $this->get_kit_name();

    return mud_format_string( TITLE_TEMPLATE_MAXITRONIX_KIT, [ 'name' => $name ] );

  }

  public function get_kit_name() { return $this->get_maxitronix_kit_name(); }

  public function get_maxitronix_kit_name() {

    return $this->get( MaxitronixKitName::class );

  }

  public static function get_html_title( $kit ) {

    static $title_map = [
      MAXITRONIX_10 => TITLE_FEATURE_MAXITRONIX_10,
      MAXITRONIX_20 => TITLE_FEATURE_MAXITRONIX_20,
      MAXITRONIX_30 => TITLE_FEATURE_MAXITRONIX_30,
      MAXITRONIX_59 => TITLE_FEATURE_MAXITRONIX_59,
      MAXITRONIX_60 => TITLE_FEATURE_MAXITRONIX_60,
      MAXITRONIX_130 => TITLE_FEATURE_MAXITRONIX_130,
      MAXITRONIX_200 => TITLE_FEATURE_MAXITRONIX_200,
      MAXITRONIX_300 => TITLE_FEATURE_MAXITRONIX_300,
      MAXITRONIX_500 => TITLE_FEATURE_MAXITRONIX_500,
    ];

    return $title_map[ $kit ] ?? null;

  }
}
