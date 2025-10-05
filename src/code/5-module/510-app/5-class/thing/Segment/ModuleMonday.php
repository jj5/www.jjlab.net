<?php

function module_monday() {

  return new_thing( ModuleMonday::class, func_get_args() );

}

class ModuleMonday extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'module-monday' );

  }

  public function render_extra_video_attributes() {

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay#heading',
        TITLE_CHANNEL_MAIN,
      );

      out_text( ' > ' );

      render_link_internal(
        'Special Show',
        url_base() . '/show-type.php/special-show#heading',
        TITLE_SHOW_SPECIAL,
      );

      out_text( ' > ' );

      render_link_internal(
        'Module Monday',
        url_base() . '/feature.php/module-monday#heading',
        TITLE_FEATURE_MODULE_MONDAY,
      );

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "Module Monday #$id: " );

  }

  public function render_title_suffix() {}

}

class NullModuleMonday extends ModuleMonday {

  use NullThingMixin;

}
