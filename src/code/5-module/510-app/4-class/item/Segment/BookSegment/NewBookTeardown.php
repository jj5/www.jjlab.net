<?php

function new_book_teardown() {

  return new_item( NewBookTeardown::class, func_get_args() );

}

class NewBookTeardown extends BookSegment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, 'special-show' );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'new-book-teardown' );

  }

  public function render_extra_video_attributes() {

    $show = $this->get_show();

    tag_text( 'dt', 'Main Show' );
    //tag_html( 'dd', $show->get_main_feature()->get_link_html() );

    tag_open( 'dd' );

      $show->get_first_segment()->render_internal_link();

    tag_shut( 'dd' );

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
        'New Book Teardown',
        [
          'href' => url_base() . '/feature.php/new-book-teardown',
          'class' => 'internal',
          'title' => TITLE_FEATURE_NEW_BOOK_TEARDOWN,
        ]
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    out_text( 'New Book Teardown: ' );
    
  }

  public function render_title_suffix() {}

}

class NullNewBookTeardown extends NewBookTeardown {

  use NullItemMixin;

}
