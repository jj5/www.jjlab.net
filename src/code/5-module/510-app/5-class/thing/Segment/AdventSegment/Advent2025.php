<?php

function advent_2025() {

  return new_thing( Advent2025::class, func_get_args() );

}

class Advent2025 extends AdventSegment {

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'advent-2025' );

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay#heading',
        TITLE_CHANNEL_MAIN,
      );

      out_text( ' > ' );

      render_link_internal(
        'Special Show',
        url_base() . '/show-type.php/special-show#heading',
        TITLE_SHOW_SPECIAL,
      );

      out_text( ' > ' );

      render_link_internal(
        'Maker Advent Calendar 2025',
        url_base() . '/feature.php/maker-advent-calendar-2025#heading',
        TITLE_FEATURE_MAKER_ADVENT_CALENDAR_2025,
      );

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "Maker Advent Calendar 2025 $id/12: " );

  }

}

class NullAdvent2025 extends Advent2025 {

  use NullThingMixin;

}
