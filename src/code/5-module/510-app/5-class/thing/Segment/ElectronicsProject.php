<?php

function electronics_project() {

  return new_thing( ElectronicsProject::class, func_get_args() );

}

class ElectronicsProject extends Segment {

  public function get_channel() {

    return get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  }

  public function get_show_type() {

    return get_item_by_slug( ShowType::class, ShowEnum::MainShow->value );

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

        $old_book->render_link_internal();

      tag_shut( 'dd' );

    }

    $new_book = $show->get_new_book_teardown();

    if ( $new_book->is_live() ) {

      tag_text( 'dt', 'New Book Teardown' );
      //tag_html( 'dd', $new_book->get_link_html() );

      tag_open( 'dd' );

        $new_book->render_link_internal();

      tag_shut( 'dd' );


    }

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
        'Electronics Project',
        url_base() . '/feature.php/electronics-project#heading',
        TITLE_FEATURE_ELECTRONICS_PROJECT,
      );

      //$this->get_feature()->render_rss_link();

    tag_shut( 'p' );

  }

  public function render_title_prefix() {

    $id = $this->get_item_id();

    out_text( "Electronics Project #$id: " );

  }

  public function render_title_suffix() {}

}

class NullElectronicsProject extends ElectronicsProject {

  use NullThingMixin;

}
