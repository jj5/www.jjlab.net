<?php

function early_content() {

  return new_item( EarlyContent::class, func_get_args() );

}

class EarlyContent extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'early-content' );

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
          'href' => url_base() . '/show-type.php/special-show',
          'class' => 'internal',
          'title' => TITLE_SHOW_SPECIAL,
        ]
      );

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Early Content',
        [
          'href' => url_base() . '/feature.php/early-content',
          'class' => 'internal',
          'title' => TITLE_FEATURE_EARLY_CONTENT,
        ]
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    out_text( 'Early Content: ' );
    
  }

  public function render_title_suffix() {}

}

class NullEarlyContent extends EarlyContent {

  use NullItemMixin;

}
