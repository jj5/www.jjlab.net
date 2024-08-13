<?php

function channel() {

  return new_thing( Channel::class, func_get_args() );

}

class Channel extends AppThing {

  protected static $text_map = [
    '@InTheLabWithJayJay' => 'Main Channel',
    '@ElliotsExtras' => '2nd Channel',
  ];

  protected static $title_map = [
    '@InTheLabWithJayJay' => TITLE_CHANNEL_MAIN,
    '@ElliotsExtras' => TITLE_CHANNEL_EXTRA,
  ];

  public function get_live_video_list() {

    $list = app_stash()->get_live_video_list();

    return array_values( array_filter(
      $list,
      function( $video ) {
        return $video->get_channel() === $this;
      }
    ));

  }

  public function get_rss_info( &$title, &$url ) {

    $slug = $this->get_slug();
    $title = 'RSS » ' . $slug;
    $url = url_base() . '/feed.php/channel/' . $slug;

  }

  public function get_channel_text() { return $this->get( ChannelText::class ); }

  public function get_channel_url() { return $this->get( ChannelUrl::class ); }
  public function get_channel_slug() { return $this->get( ChannelSlug::class ); }
  public function get_channel_name() { return $this->get( ChannelName::class ); }

  public function render_link_internal( $text = null, $attrs = [] ) {

    $slug = $this->get_slug();
    $text = $text ?? $slug;

    render_link_internal(
      $text,
      $this->get_internal_url(),
      $this->get_title_attr(),
    );

  }

  public function render_link_external( $text = null, $attrs = [] ) {

    $slug = $this->get_slug();
    $text = $text ?? $slug;

    render_link_internal(
      $text,
      $this->get_external_url(),
      $this->get_title_attr(),
    );

  }

  public function render( mixed $format = null, array $attrs = [] ): void {

    $url = $this->get_internal_url();
    $slug = $this->get_channel_slug()->to_string();
    //$name = $this->get_channel_name()->to_string();

    render_link_internal(
      $slug,
      $url,
      self::$title_map[ $slug ] ?? '',
      [
        'class' => 'internal channel',
      ],
    );

  }

  public function render_link(){ return $this->render(); }

  public function render_title_prefix() {

    $url = $this->get_internal_url();
    $slug = $this->get_channel_slug()->to_string();
    $name = $this->get_channel_name()->to_string();

    render_link_internal(
      $this->text_map[ $slug ],
      $url,
      $this->title_map[ $slug ],
      [
        'class' => 'internal channel',
      ],
    );

    out_text( ': ' );

  }

  public function get_internal_url() {

    $slug = $this->get_channel_slug()->to_string();

    return url_base() . "/channel.php/$slug#heading";

  }

  public function get_external_url() {

    $slug = $this->get_channel_slug()->to_string();

    return APP_URL_BASE . "/channel.php/$slug#heading";

  }

  public function get_title_attr() {

    return self::$title_map[ $this->get_slug() ] ?? '';

  }


  public function get_show_type_list() { return $this->get_list( ShowType::class ); }

  public function get_thing_list() {

    $list = app_stash()->get_list( Show::class );

    $list = array_filter(
      $list,
      function( $show ) {
        if ( ! $show->get_first_segment()->is_live() ) { return false; }
        $a = $show->get_channel()->get_slug();
        $b = $this->get_slug();
        return $a === $b;
      }
    );

    $list = array_reverse( $list );

    return AppStash::get_thing_list( $list );

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

      if ( $video->get_channel() === $this && $video->is_live() ) {

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

      if ( $video->get_channel() === $this ) {

        $seconds += $video->get_duration()->get_seconds();

      }
    }

    return $seconds / 3600.0;

  }

}

class NullChannel extends Channel {

  use NullThingMixin;

}
