<?php

function extra_content() {

  return new_thing( ExtraContent::class, func_get_args() );

}

class ExtraContent extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@ElliotsExtras' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::ExtraShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'extra-content' );

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        '2nd Channel',
        url_base() . '/channel.php/@ElliotsExtras',
        TITLE_CHANNEL_EXTRA,
      );

      //$this->get_channel()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'Extra Show',
        url_base() . '/show-type.php/extra-show',
        TITLE_SHOW_EXTRA,
      );

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'Extra Content',
        url_base() . '/feature.php/extra-content',
        TITLE_FEATURE_EXTRA,
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "Extra Content #$id: " );
    
  }

  public function render_title_suffix() {}

}

class NullExtraContent extends ExtraContent {

  use NullThingMixin;

}
