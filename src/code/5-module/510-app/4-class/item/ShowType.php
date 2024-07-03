<?php

function show_type() {

  return new_item( ShowType::class, func_get_args() );

}

class ShowType extends Item {

  public function get_rss_info( &$title, &$url ) {

    $slug = $this->get_slug();
    $channel = $this->get_channel();

    $title = 'RSS » ' . $channel->get_slug() . ' » ' . $this->get_name();

    $url = url_base() . '/feed.php/show-type/' . $slug;

  }

  public function get_live_video_list() {

    $list = app_stash()->get_live_video_list();

    return array_values( array_filter(
      $list,
      function( $video ) {
        return $video->get_show_type() === $this;
      }
    ));

  }

  public function get_show_text() { return $this->get( ShowText::class ); }

  public function get_channel() {

    return $this->get_closest( Channel::class );

  }

  public function get_internal_url() {

    return url_base() . '/show-type.php/' . $this->get_slug();

  }

  public function render_internal_link( $text = null, $attrs = [] ) {

    $url = $this->get_internal_url();
    $text = $text ?? $this->get_name();

    tag_text(
      'a',
      $text,
      $attrs + [
        'href' => $url,
        'class' => 'internal show',
        'title' => $this->get_show_text()->to_string(),
      ]
    );

  }

  public function get_feature_list() {

    return $this->get_list( Feature::class );

  }

  private $video_count = null;

  public function video_count() {

    if ( $this->video_count === null ) {

      $this->video_count = $this->calculate_video_count();

    }

    return $this->video_count;

  }

  private function calculate_video_count() {

    $result = 0;

    foreach ( get_list( Video::class ) as $video ) {

      if ( $video->get_show_type() === $this ) {

        $result++;

      }
    }

    return $result;

  }

  public function get_thing_list() {

    $list = app_stash()->get_list( Show::class );

    $list = array_filter(
      $list,
      function( $show ) {
        if ( ! $show->get_first_segment()->is_live() ) { return false; }
        $a = $show->get_show_type()->get_slug();
        $b = $this->get_slug();
        //dump([ 'a' => $a, 'b' => $b ]);
        return $a === $b;
      }
    );

    $list = array_reverse( $list );

    return AppStash::get_thing_list( $list );

  }

}

class NullShowType extends ShowType {

  use NullItemMixin;

}
