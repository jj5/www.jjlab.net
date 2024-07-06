<?php

function feature() {

  return new_item( Feature::class, func_get_args() );

}

class Feature extends Item {

  public function get_rss_info( &$title, &$url ) {

    $channel = $this->get_channel();
    $show_type = $this->get_show_type();
    $title = 'RSS » ' . $channel->get_slug() . ' » ' . $show_type->get_name(). ' » ' . $this->get_name();
    $url = url_base() . '/feed.php/feature/' . $this->get_slug();

  }

  public function get_live_video_list() {

    $list = app_stash()->get_live_video_list();

    return array_values( array_filter(
      $list,
      function( $video ) {
        return $video->get_feature() === $this;
      }
    ));

  }

  public function get_channel() { return $this->get_closest( Channel::class ); }

  public function get_show_type() { return $this->get_closest( ShowType::class ); }

  public function get_feature_text() { return $this->get( FeatureText::class ); }

  public function get_internal_url() {

    return url_base() . '/feature.php/' . $this->get_slug();

  }

  public function render_internal_link( $text = null, $attrs = [] ) {

    $url = $this->get_internal_url();
    $text = $text ?? $this->get_name();

    tag_text(
      'a',
      $text,
      $attrs + [
        'href' => $url,
        'class' => 'internal feature',
        'title' => $this->get_feature_text()->to_string(),
      ]
    );

  }

  private $video_count = null;

  public function get_video_count() {

    if ( $this->video_count === null ) {

      $this->video_count = $this->calculate_video_count();

    }

    return $this->video_count;

  }

  private function calculate_video_count() {

    $result = 0;

    foreach ( get_list( Video::class ) as $video ) {

      if ( $video->get_feature() === $this ) {

        $result++;

      }
    }

    return $result;

  }

  private $total_hours = null;

  public function get_total_hours() {

    if ( $this->total_hours === null ) {

      $this->total_hours = $this->calculate_total_hours();

    }

    return $this->total_hours;

  }

  public function calculate_total_hours() {

    $seconds = 0;

    foreach ( get_list( Video::class ) as $video ) {

      if ( $video->get_feature() === $this ) {

        $seconds += $video->get_duration()->get_seconds();

      }
    }

    return $seconds / 3600.0;

  }


  public function get_thing_list() {

    $list = app_stash()->get_list( Segment::class );

    $list = array_filter(
      $list,
      function( $segment ) {
        if ( ! $segment->is_live() ) { return false; }
        $a = $segment->get_feature()->get_slug();
        $b = $this->get_slug();
        //dump([ 'a' => $a, 'b' => $b ]);
        return $a === $b;
      }
    );

    $list = array_reverse( $list );

    return AppStash::get_thing_list( $list );

  }

}

class NullFeature extends Feature {

  use NullItemMixin;

}
