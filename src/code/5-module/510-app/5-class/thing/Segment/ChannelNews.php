<?php

function channel_news() {

  return new_thing( ChannelNews::class, func_get_args() );

}

class ChannelNews extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'channel-news' );

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay',
        TITLE_CHANNEL_MAIN,
      );

      //$this->get_channel()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'Special Show',
        url_base() . '/show-type.php/special-show',
        TITLE_SHOW_SPECIAL,
      );

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'Channel News',
        url_base() . '/feature.php/channel-news',
        TITLE_FEATURE_CHANNEL_NEWS,
      );

      //$this->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    

    $id = $this->get_item_id();

    out_text( "Channel News #$id: " );
    
  }

  public function render_title_suffix() {}

}

class NullChannelNews extends ChannelNews {

  use NullThingMixin;

}
