<?php

function channel() {

  return new_item( Channel::class, func_get_args() );

}

class Channel extends Item {

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

  public function render() {

    $url = $this->get_internal_url();
    $slug = $this->get_channel_slug()->to_string();
    //$name = $this->get_channel_name()->to_string();

    tag_text(
      'a',
      $slug,
      [
        'href' => $url,
        'class' => 'internal channel',
        'title' => self::$title_map[ $slug ],
      ]
    );

  }

  public function render_link(){ return $this->render(); }

  public function render_title_prefix() {

    $url = $this->get_internal_url();
    $slug = $this->get_channel_slug()->to_string();
    $name = $this->get_channel_name()->to_string();

    tag_text(
      'a',
      $this->text_map[ $slug ],
      [
        'href' => $url,
        'class' => 'internal channel',
        'title' => $this->title_map[ $slug ],
      ]
    );

    out_text( ': ' );

  }

  public function get_internal_url() {

    $slug = $this->get_channel_slug()->to_string();

    return url_base() . '/channel.php/' . $slug;

  }

  public function render_internal_link( $text = null, $attrs = [] ) {

    $slug = $this->get_slug();
    $text = $text ?? $slug;

    tag_text(
      'a',
      $text,
      $attrs + [
        'href' => $this->get_internal_url(),
        'class' => 'internal',
        'title' => $this->get_title_attr(),
      ]
    );

  }

  public function get_title_attr() {

    return self::$title_map[ $this->get_slug() ];

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
        //dump([ 'a' => $a, 'b' => $b ]);
        return $a === $b;
      }
    );

    $list = array_reverse( $list );

    return AppStash::get_thing_list( $list );

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

      if ( $video->get_channel() === $this ) {

        $result++;

      }
    }

    return $result;

  }

}

class NullChannel extends Channel {

  use NullItemMixin;

}
