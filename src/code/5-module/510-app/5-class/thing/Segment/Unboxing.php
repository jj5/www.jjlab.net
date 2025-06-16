<?php

function unboxing() {

  return new_thing( Unboxing::class, func_get_args() );

}

class Unboxing extends Segment {

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay#heading',
        TITLE_CHANNEL_MAIN,
      );

      //$this->get_channel()->render_rss_link();

      /*
      out_text( ' > ' );

      render_link_internal(
        'Special Show',
        url_base() . '/show-type.php/special-show#heading',
        TITLE_SHOW_SPECIAL,
      );
      */

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'Unboxing',
        url_base() . '/feature.php/unboxing#heading',
        TITLE_FEATURE_UNBOXING,
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "Unboxing #$id: " );

  }

  public function render_title_suffix() {}

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'unboxing' );

  }

  public function get_segment_name() {

    return $this->get_feature()->get_name();

  }

  public function get_video() {

    return $this->get( Video::class );

  }

}

class NullUnboxing extends Unboxing {

  use NullThingMixin;

}
