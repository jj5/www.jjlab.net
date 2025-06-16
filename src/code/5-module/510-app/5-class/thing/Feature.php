<?php

function feature() {

  return new_thing( Feature::class, func_get_args() );

}

class Feature extends AppThing {

  public function get_rss_info( &$title, &$url ) {

    $channel = $this->get_channel();
    $show_type = $this->get_show_type();
    // 2025-06-16 jj5 - NEW:
    $title = 'RSS » ' . $channel->get_slug() . ' » ' . $this->get_name();
    // 2025-06-16 jj5 - OLD:
    //$title = 'RSS » ' . $channel->get_slug() . ' » ' . $show_type->get_name(). ' » ' . $this->get_name();
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

  public function get_channel() { return $this->get_ancestor( Channel::class ); }

  public function get_show_type() { return $this->get_ancestor( ShowType::class ); }

  public function get_feature_text() { return $this->get( FeatureText::class ); }

  public function get_internal_url() {

    $slug = $this->get_slug();

    return url_base() . "/feature.php/$slug#heading";

  }

  public function get_external_url() {

    $slug = $this->get_slug();

    return APP_URL_BASE . "/feature.php/$slug#heading";

  }

  public function render_link_internal( $text = null, $attrs = [] ) {

    $url = $this->get_internal_url();
    $text = $text ?? $this->get_name();

    render_link_internal(
      $text,
      $url,
      $this->get_feature_text()->to_string(),
      [
        'class' => 'internal feature',
      ],
    );

  }

  public function render_link_external( $text = null, $attrs = [] ) {

    $url = $this->get_external_url();
    $text = $text ?? $this->get_name();

    render_link_internal(
      $text,
      $url,
      $this->get_feature_text()->to_string(),
      [
        'class' => 'internal feature',
      ],
    );

  }

  public function get_video_count() {

    return count( $this->get_video_list() );


  }

  private $video_list = null;

  public function get_video_list() {

    if ( $this->video_list === null ) {

      $this->video_list = $this->calculate_video_list();

    }

    return $this->video_list;

  }

  private function calculate_video_list() {

    $result = [];

    foreach ( get_list( Video::class ) as $video ) {

      if ( $video->get_feature() === $this && $video->is_live() ) {

        $result[] = $video;

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

    foreach ( $this->get_video_list() as $video ) {

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
        return $a === $b;
      }
    );

    $list = array_reverse( $list );

    return AppData::get_thing_list( $list );

  }
}

class NullFeature extends Feature {

  use NullThingMixin;

}
