<?php

function youtube_video() {

  $args = func_get_args();

  if ( count( $args ) === 1 && is_string( $args[ 0 ] ) ) {

    $args = [ slug( $args[ 0 ] ) ];

  }

  return new_item( YoutubeVideo::class, $args );

}

class YoutubeVideo extends Video {

  protected $url = null;
  protected $duration = null;

  public function get_id() { return $this->get_slug()->to_string(); }

  // 2024-07-02 jj5 - OLD: we can inherit the implementation for this...
  //
  /*
  public function get_internal_url() {

    $channel = $this->get_channel();

    $channel_url = $channel->get_internal_url();

    $slug = $this->get_slug()->to_string();

    $query = [ 'from' => strval( $this->get_show()->get_first_segment()->get_video()->get_slug() ) ];

    return $channel_url . '?' . http_build_query( $query ) . '#' . $slug;

  }
  */



  public function get_slug() { return $this->get( Slug::class ); }

  public function render_external_link( $text = null, $attrs = [] ) {

    $url = $this->get_url()->to_string();

    $text = $text ?? $url;

    tag_text(
      'a',
      $text,
      $attrs + [
        'href' => $url,
        'class' => 'external',
        'target' => '_blank',
        'title' => 'Click here to watch the video on YouTube.',
      ]
    );

  }

  public function get_url() {

    if ( $this->url === null ) {

      if ( $this->get_slug()->is_null() ) {

        $url = NullYoutubeUrl::Instance();

      }
      else {

        $url = youtube_url( 'https://youtu.be/' . $this->get_slug()->to_string() );

        $url->set_parent( $this );

      }

      $this->url = $url;

    }

    return $this->url;

  }

  public function get_duration() {

    try {

      if ( $this->duration === null ) {

        if ( $this->get_slug()->is_null() ) {

          $duration = NullDuration::Instance();

        }
        else {

          $duration = itl()->get_youtube_video_duration( $this->get_slug()->to_string() );

          $duration = duration( $duration );

          $duration->set_parent( $this );

        }

        $this->duration = $duration;

      }

      return $this->duration;

    }
    catch ( Throwable $ex ) {

      return 0.0;

    }
  }
}

class NullYoutubeVideo extends YoutubeVideo {

  use NullItemMixin;

}
