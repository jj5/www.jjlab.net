<?php

function channel_news() {

  return new_item( ChannelNews::class, func_get_args() );

}

class ChannelNews extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show() {

    return get_item_by_slug( Show::class, 'special-show' );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'channel-news' );

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
        'Channel News',
        [
          'href' => url_base() . '/feature.php/channel-news',
          'class' => 'internal',
          'title' => TITLE_FEATURE_ANNOUNCEMENT,
        ]
      );

      //$this->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    out_text( 'Channel News: ' );
    
  }

  public function render_title_suffix() {}

}

class NullChannelNews extends ChannelNews {

  use NullItemMixin;

}
