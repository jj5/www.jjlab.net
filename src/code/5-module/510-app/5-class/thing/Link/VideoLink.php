<?php

function video_link() {

  return new_thing( VideoLink::class, func_get_args() );

}

class NullVideoLink extends VideoLink {

  use NullThingMixin;

}

class VideoLink extends Link {

  private $is_live = null;

  public function is_live() : bool {

    if ( $this->is_live !== null ) { return $this->is_live; }

    if ( $this->is_null() ) {

      $this->is_live = false;

      return false;

    }

    if ( is_john() ) {

      $this->is_live = true;

      return true;

    }

    $url = $this->get_link_href()->to_string();

    if ( preg_match( '|https://blog.jj5.net/blog/(\d{4})/(\d{2})/(\d{2})/|', $url, $matches ) ) {

      $date = new DateTime( $matches[ 1 ] . '-' . $matches[ 2 ] . '-' . $matches[ 3 ] );

      $publish = ( new DateTime( $date->format( 'Y-m-d 23:45:37' ) ) )->getTimestamp();

      $this->is_live = ( new DateTime() )->getTimestamp() > $publish;

    }
    else {

      $this->is_live = true;

    }

    return $this->is_live;

  }
}
