<?php

function new_book_teardown() {

  return new_thing( NewBookTeardown::class, func_get_args() );

}

class NewBookTeardown extends BookSegment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'new-book-teardown' );

  }

  public function render_extra_video_attributes() {

    // 2024-09-25 jj5 - this is obsolete now, just skip it.

    return;

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
        'Special Show',
        url_base() . '/show-type.php/special-show#heading',
        TITLE_SHOW_SPECIAL,
      );

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      render_link_internal(
        'New Book Teardown',
        url_base() . '/feature.php/new-book-teardown#heading',
        TITLE_FEATURE_NEW_BOOK_TEARDOWN,
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "New Book Teardown #$id: " );

  }

  public function render_title_suffix() {}

}

class NullNewBookTeardown extends NewBookTeardown {

  use NullThingMixin;

}
