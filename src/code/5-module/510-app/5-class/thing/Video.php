<?php

abstract class Video extends AppThing {

  public function get_priority() {

    // 2024-07-06 jj5 - all videos are high priority content, it's only the change frequency that varies...
    //
    switch ( $this->get_changefreq() ) {

      case ChangeFreq::Always:
      case ChangeFreq::Hourly: return '1.0';

      default : return '0.9';

    }

    /*
    switch ( $this->get_changefreq() ) {

      case ChangeFreq::Always: return '1.0';
      case ChangeFreq::Hourly: return '0.9';
      case ChangeFreq::Daily: return '0.5';
      case ChangeFreq::Weekly: return '0.4';
      case ChangeFreq::Monthly: return '0.3';
      case ChangeFreq::Yearly: return '0.2';
      case ChangeFreq::Never: return '0.1';
      default : mud_not_supported();

    }
    */
  }

  public function get_changefreq() {

    $weeks_old = $this->get_weeks_old();

    if ( $weeks_old < 1 ) { return ChangeFreq::Hourly; }

    if ( $weeks_old < 4 ) { return ChangeFreq::Daily; }

    if ( $weeks_old < 12 ) { return ChangeFreq::Weekly; }

    // 2024-07-06 jj5 - NEW: I think we should update everything at least weekly, just for when the software changes and
    // thus the content changes too...
    return ChangeFreq::Weekly;
    // 2024-07-06 jj5 - OLD:
    //return ChangeFreq::Monthly;

  }

  public function get_weeks_old() : float {

    static $now = null;

    if ( $now === null ) { $now = new DateTime(); }

    $publication_date = $this->get_publication_date()->get_value();

    $interval = $now->diff( $publication_date );

    // 2024-07-06 jj5 - return with decimal places...
    //
    return $interval->days / 7.0;

  }

  public function is_live() : bool {

    return $this->get_segment()->is_live();

  }

  public function get_publication_date() {

    return $this->get_parent()->get( PublicationDate::class );

  }

  public abstract function get_id();

  public function get_channel() {

    $segment = $this->get_segment();

    $channel = $segment->get_channel();

    if ( $channel === null ) { mud_dump( $this ); }

    return $channel;

  }

  public function get_show_type() {

    return $this->get_segment()->get_show_type();

  }

  public function get_feature() {

    return $this->get_segment()->get_feature();

  }

  public function get_show() {

    return $this->get_ancestor( Show::class );

  }

  public function get_segment() {

    return $this->get_ancestor( Segment::class );

  }

  public function get_segment_name() {

    return $this->get_segment()->get_name();

  }

  public function get_video_name() {

    return $this->get_segment_name();

  }

  public function get_name() { return $this->get_video_name(); }

  public function get_internal_url() {

    return $this->get_url_with_base( url_base() );

  }

  public function get_external_url() {

    return $this->get_url_with_base( APP_URL_BASE );

  }

  protected function get_url_with_base( $base ) {

    $channel_slug = $this->get_channel()->get_slug();

    $show = $this->get_show();

    $segment = $show->get_first_segment();

    $youtube = $segment->get_youtube_video();

    $slug = $youtube->get_slug();

    $show_slug = $slug->to_string();

    $slug = $this->get_slug()->to_string();

    return $base . '/show.php/' . $channel_slug . '/' . $show_slug . '#' . $slug;

  }

  public function render_link_internal( $text = null, $attrs = [] ) {

    $url = $this->get_internal_url();
    $text = $text ?? $this->get_segment()->get_name();

    render_link_internal(
      $text,
      $url,
      TITLE_LINK_VIDEO,
      $attrs,
    );

  }

  public function render_link_external( $text = null, $attrs = [] ) {

    $url = $this->get_external_url();
    $text = $text ?? $this->get_segment()->get_name();

    render_link_internal(
      $text,
      $url,
      TITLE_LINK_VIDEO,
      $attrs,
    );

  }

  public function get_youtube_video_title() {

    return $this->get_segment()->get_youtube_video_title();

  }
}

class NullVideo extends Video {

  use NullThingMixin;

  public function get_id() { return null; }

}
