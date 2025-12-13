<?php

abstract class AdventSegment extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function render_extra_video_attributes() {

  }

  public function render_title_suffix() {}

}

class NullAdventSegment extends AdventSegment {

  use NullThingMixin;

  public function get_feature() {

    return $this;

  }
}
