<?php

abstract class Video extends Item {

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

  public function is_live() {

    return $this->get_segment()->is_live();

  }

  public function get_publication_date() {
    
    return $this->get_closest( PublicationDate::class );

  }

  public abstract function get_id();

  public function get_channel() {

    return $this->get_segment()->get_channel();

  }

  public function get_show_type() {

    return $this->get_segment()->get_show_type();

  }

  public function get_feature() {

    return $this->get_segment()->get_feature();

  }

  public function get_show() {

    return $this->get_closest( Show::class );

  }

  public function get_segment() {

    return $this->get_closest( Segment::class );

  }

  public function get_segment_name() {

    return $this->get_segment()->get_name();

  }

  public function get_video_name() {

    return $this->get_segment_name();

  }

  public function get_name() { return $this->get_video_name(); }

  public function get_internal_url() {

    $channel_slug = $this->get_channel()->get_slug();
    $show_slug = $this->get_show()->get_first_segment()->get_youtube_video()->get_slug()->to_string();
    $slug = $this->get_slug()->to_string();

    return url_base() . '/show.php/' . $channel_slug . '/' . $show_slug . '#' . $slug;

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


  public function get_youtube_video_title() {

    $segment = $this->get_segment();

    if ( is_a( $segment, EarlyContent::class ) ) { return $this->get_video_title_without_prefix(); }

    if ( is_a( $segment, Unboxing::class ) ) { return $this->get_video_title_without_prefix(); }

    if ( is_a( $segment, MaxitronixSegment::class ) ) { return $this->get_maxitronix_video_title(); }

    if ( is_a( $segment, ExtraContent::class ) ) { return $this->get_extra_content_video_title(); }

    //if ( is_a( $segment, BookSegment::class ) ) { return $this->get_book_video_title(); }

    $segment_name = strval( $segment->get_segment_name() );
    $video_name = strval( $this->get_video_name() );

    $name = "$segment_name: $video_name | Learning Electronics In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$segment_name: $video_name | In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$segment_name: $video_name | In The Lab";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$segment_name: $video_name";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name";

    return $name;

  }

  public function get_video_title_without_prefix() {

    $video_name = strval( $this->get_video_name() );

    $name = "$video_name | Learning Electronics In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name | In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name | In The Lab";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name";

    return $name;

  }


  public function get_maxitronix_video_title() {

    $segment = $this->get_segment();

    $video_name = strval( $this->get_video_name() );
    $kit = $segment->get_maxitronix_kit_name()->to_string();
    $project = $segment->get_project()->to_string();

    if ( $project ) {

      $name = "$video_name | Project $project | Maxitronix $kit | Learning Electronics In The Lab With Jay Jay";

      if ( strlen( $name ) <= 100 ) { return $name; }

      $name = "$video_name | Project $project | Maxitronix $kit | In The Lab With Jay Jay";

      if ( strlen( $name ) <= 100 ) { return $name; }

      $name = "$video_name | Project $project | Maxitronix $kit | In The Lab";

      if ( strlen( $name ) <= 100 ) { return $name; }

      $name = "$video_name | Project $project | Maxitronix $kit";

      return $name;

    }

    $name = "$video_name | Maxitronix $kit | Learning Electronics In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name | Maxitronix $kit | In The Lab With Jay Jay";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name | Maxitronix $kit | In The Lab";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name | Maxitronix $kit";

    return $name;

  }

  public function get_extra_content_video_title() {

    $segment = $this->get_segment();
    $segment_name = strval( $segment->get_segment_name() );
    $video_name = strval( $this->get_video_name() );

    $name = "$segment_name: $video_name | Elliot's Extras";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$segment_name: $video_name";

    if ( strlen( $name ) <= 100 ) { return $name; }

    $name = "$video_name";

    return $name;

  }
}

class NullVideo extends Video {

  use NullItemMixin;

  public function get_id() { return null; }

}
