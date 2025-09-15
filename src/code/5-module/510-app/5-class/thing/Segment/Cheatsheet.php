<?php

function cheatsheet() {

  return new_thing( Cheatsheet::class, func_get_args() );

}

class Cheatsheet extends Segment {

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay#heading',
        TITLE_CHANNEL_MAIN,
      );

      out_text( ' > ' );

      render_link_internal(
        'Cheatsheet',
        url_base() . '/feature.php/cheatsheet#heading',
        TITLE_FEATURE_QUICK_STUDY,
      );

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "Cheatsheet #$id: " );

  }

  public function render_title_suffix() {}

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'cheatsheet' );

  }

  public function get_segment_name() {

    return $this->get_feature()->get_name();

  }

  public function get_video() {

    return $this->get( Video::class );

  }

}

class NullCheatsheet extends Cheatsheet {

  use NullThingMixin;

}
