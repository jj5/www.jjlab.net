<?php

abstract class Video extends Item {

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

  public function render_internal_link( $text = null, $attrs = [] ) {

    $url = $this->get_internal_url();
    $text = $text ?? $this->get_segment()->get_name();

    tag_text(
      'a',
      $text,
      $attrs + [
        'href' => $url,
        'class' => 'internal',
        'rel' => 'follow',
        'title' => 'Click here to watch this video.'
      ]
    );

  }


  public function get_youtube_video_title() {

    $segment = $this->get_segment();

    if ( is_a( $segment, EarlyContent::class ) ) { return $this->get_video_title_without_prefix(); }

    if ( is_a( $segment, Unboxing::class ) ) { return $this->get_video_title_without_prefix(); }

    if ( is_a( $segment, MaxitronixSegment::class ) ) { return $this->get_maxitronix_video_title(); }

    if ( is_a( $segment, ExtraContent::class ) ) { return $this->get_extra_content_video_title(); }

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
