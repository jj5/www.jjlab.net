<?php

function unboxing() {

  return new_item( Unboxing::class, func_get_args() );

}

class Unboxing extends Segment {

  public function render_breadcrumbs() {

    tag_open( 'p' );

      tag_text(
        'a',
        'Main Channel',
        [
          'href' => url_base() . '/channel.php/@InTheLabWithJayJay',
          'class' => 'internal',
          'title' => TITLE_CHANNEL_MAIN,
        ]
      );

      //$this->get_channel()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Special Show',
        [
          'href' => url_base() . '/show-type.php/special-show',
          'class' => 'internal',
          'title' => TITLE_SHOW_SPECIAL,
        ]
      );

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Unboxing',
        [
          'href' => url_base() . '/feature.php/unboxing',
          'class' => 'internal',
          'title' => TITLE_FEATURE_UNBOXING,
        ]
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    out_text( 'Unboxing: ' );
    
  }

  public function render_title_suffix() {}

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, 'special-show' );

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

  use NullItemMixin;

}
