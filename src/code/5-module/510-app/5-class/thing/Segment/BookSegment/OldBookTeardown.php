<?php

function old_book_teardown() {

  return new_thing( OldBookTeardown::class, func_get_args() );

}

class OldBookTeardown extends BookSegment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::MainShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'old-book-teardown' );

  }

  public function render_extra_video_attributes() {

    $show = $this->get_show();

    tag_text( 'dt', 'Main Show' );
    //tag_html( 'dd', $show->get_main_feature()->get_link_html() );

    tag_open( 'dd' );

      $show->get_first_segment()->render_link_internal();

    tag_shut( 'dd' );

  }

  public function render_breadcrumbs() {

    tag_open( 'p' );

      render_link_internal(
        'Main Channel',
        url_base() . '/channel.php/@InTheLabWithJayJay#heading',
        TITLE_CHANNEL_MAIN,
      );

      //$this->get_channel()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'Main Show',
        url_base() . '/show-type.php/main-show#heading',
        TITLE_SHOW_MAIN,
      );

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'Old Book Teardown',
        url_base() . '/feature.php/old-book-teardown#heading',
        TITLE_FEATURE_OLD_BOOK_TEARDOWN,
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "Old Book Teardown #$id: " );

  }

  public function render_title_suffix() {}

}

class NullOldBookTeardown extends OldBookTeardown {

  use NullThingMixin;

}
