<?php

function extra_content() {

  return new_item( ExtraContent::class, func_get_args() );

}

class ExtraContent extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@ElliotsExtras' );

  }

  public function get_show() {

    return get_item_by_slug( Show::class, 'extra-show' );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'extra-content' );

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      tag_text(
        'a',
        '2nd Channel',
        [
          'href' => url_base() . '/channel.php/@ElliotsExtras',
          'class' => 'internal',
          'title' => TITLE_CHANNEL_EXTRA,
        ]
      );

      //$this->get_channel()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Extra Show',
        [
          'href' => url_base() . '/show.php/extra-show',
          'class' => 'internal',
          'title' => TITLE_SHOW_EXTRA,
        ]
      );

      //$this->get_show()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Extra Content',
        [
          'href' => url_base() . '/feature.php/extra-content',
          'class' => 'internal',
          'title' => TITLE_FEATURE_EXTRA,
        ]
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    out_text( 'Extra Content: ' );
    
  }

  public function render_title_suffix() {}

}

class NullExtraContent extends ExtraContent {

  use NullItemMixin;

}
