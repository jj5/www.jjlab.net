<?php

function interlude() {

  return new_item( Interlude::class, func_get_args() );

}

class Interlude extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show() {

    return get_item_by_slug( Show::class, 'special-show' );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'interlude' );

  }

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
          'href' => url_base() . '/show.php/special-show',
          'class' => 'internal',
          'title' => TITLE_SHOW_SPECIAL,
        ]
      );

      //$this->get_show()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Interlude',
        [
          'href' => url_base() . '/feature.php/interlude',
          'class' => 'internal',
          'title' => TITLE_FEATURE_INTERLUDE,
        ]
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    out_text( 'Interlude: ' );
    
  }

  public function render_title_suffix() {}

}

class NullInterlude extends Interlude {

  use NullItemMixin;

}
