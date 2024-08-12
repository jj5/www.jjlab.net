<?php

abstract class BookFeature extends Feature {

  public function render_link( $text = null, $attrs = [] ) {

    $book = $this->get_book();

    if ( $book->is_null() ) { return ''; }

    if ( $text === null ) {

      $book_title = $book->get_title();
      $copyright_year = $book->get_copyright_year();

      if ( $copyright_year ) {

        //$text = "$book_title published $copyright_year";
        $text = $book_title;

      }
      else {

        $text = $book_title;

      }
    }

    $url = $this->get_youtube_video()->get_url();

    if ( $url->is_null() ) {

      $url = $this->get_blog_url();

    }

    $tooltip = $text;

    $author = $book->get_author()->to_string();

    if ( $author ) { $tooltip .= " by $author"; }

    $copyright_year = $book->get_copyright_year()->to_string();

    if ( $copyright_year ) { $tooltip .= " published in $copyright_year"; }

    if ( $url->is_null() ) {

      tag_open( 'span', [ 'title' => $tooltip ] + $attrs );

        out_text( $text );

      tag_shut( 'span' );

    }
    else {

      render_link_external( $text, $url, $tooltip, $attrs );

    }
  }

  public function render_link_internal( $text = null, $attrs = [] ) {

    $book = $this->get_book();

    if ( $book->is_null() ) { return ''; }

    if ( ! $text ) {

      $book_title = $book->get_title();
      $copyright_year = $book->get_copyright_year();

      if ( $copyright_year ) {

        //$text = "$book_title published $copyright_year";
        $text = $book_title;

      }
      else {

        $text = $book_title;

      }
    }

    $main_video_id = $this->get_show_type()->get_feature()->get_youtube_video()->get_slug()->to_string();
    $this_video_id = $this->get_youtube_video()->get_slug()->to_string();

    if ( true ) {

      $url = $this->get_show_type()->get_feature()->get_video_id();

    }
    else {

      $url = $this->get_channel()->get_internal_url() .
        '?' . http_build_query( [ 'from' => $main_video_id ] ) .
        '#' . $this_video_id;

    }

    $tooltip = $text;

    $author = $book->get_author()->to_string();

    if ( $author ) { $tooltip .= " by $author"; }

    $copyright_year = $book->get_copyright_year()->to_string();

    if ( $copyright_year ) { $tooltip .= " published in $copyright_year"; }

    render_link_internal( $text, $url, $tooltip, $attrs );

  }

  public function get_link_html( $text = null, $attrs = [] ) {

    nip_init();

      $this->render_link( $text, $attrs );

    nip_done( $result );

    return $result;


  }

  public function get_video_name() {

    $book = $this->get_book();

    $result = $book->get_title()->to_string();

    $edition = $book->get_edition()->to_string();

    if ( $edition ) { $result .= " $edition"; }

    return $result;

  }
}
