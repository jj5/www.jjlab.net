<?php

function electronics_project() {

  return new_item( ElectronicsProject::class, func_get_args() );

}

class ElectronicsProject extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, 'main-show' );

  }

  public function get_feature() {

    return get_item_by_slug( Feature::class, 'electronics-project' );

  }

  public function render_extra_video_attributes() {

    $show = $this->get_show();

    $old_book = $show->get_old_book_teardown();

    if ( $old_book->is_live() ) {

      tag_text( 'dt', 'Old Book Teardown' );
      //tag_html( 'dd', $old_book->get_link_html() );

      tag_open( 'dd' );

        $old_book->render_internal_link();

      tag_shut( 'dd' );

    }

    $new_book = $show->get_new_book_teardown();

    if ( $new_book->is_live() ) {

      tag_text( 'dt', 'New Book Teardown' );
      //tag_html( 'dd', $new_book->get_link_html() );

      tag_open( 'dd' );

        $new_book->render_internal_link();

      tag_shut( 'dd' );


    }

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
        'Main Show',
        [
          'href' => url_base() . '/show-type.php/main-show',
          'class' => 'internal',
          'title' => TITLE_SHOW_MAIN,
        ]
      );

      //$this->get_show_type()->render_rss_link();

      out_text( ' > ' );

      tag_text(
        'a',
        'Electronics Project',
        [
          'href' => url_base() . '/feature.php/electronics-project',
          'class' => 'internal',
          'title' => TITLE_FEATURE_ELECTRONICS_PROJECT,
        ]
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {
    
    out_text( 'Electronics Project: ' );
    
  }

  public function render_title_suffix() {}

}

class NullElectronicsProject extends ElectronicsProject {

  use NullItemMixin;

}
