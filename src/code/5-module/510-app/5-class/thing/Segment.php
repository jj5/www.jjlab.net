<?php

abstract class Segment extends AppThing {

  public function get_video_link() {

    return video_link(
      link_href   ( $this->get_youtube_video()->get_url()->to_string() ),
      link_text   ( $this->get_youtube_video_title() ),
    );

  }

  public function get_tags() { return $this->get( Tags::class ); }

  public function get_rss_info( &$title, &$url ) {

    return $this->get_feature()->get_rss_info( $title, $url );

  }

  public abstract function get_channel();

  public abstract function get_show_type();

  public abstract function get_feature();

  public function get_patreon_url() { return $this->get( PatreonUrl::class ); }

  public function render_extra_video_attributes() { ; }

  public function get_book() { return $this->get( Book::class ); }

  public function get_silly_job_title() {

    return $this->get_show()->get_silly_job_title();

  }

  public function get_segment_name() {

    return $this->get_feature()->get_name();

  }

  public function get_video() {

    return $this->get( Video::class );

  }

  public function get_video_id() {

    return strval( $this->get_video()->get_slug() );

  }

  public function get_sponsor_list_html( $text = null, $attrs = [] ) {

    return $this->get_show()->get_sponsor_list_html( $text, $attrs );

  }

  public function render_title_prefix() { ; }

  public function render_title_suffix() { ; }

  public function render_breadcrumbs() { ; }

  public function get_title_attr() { return TITLE_LINK_SEGMENT; }

  public function get_show() { return $this->get_ancestor( Show::class ); }

  public function get_publication_date() { return $this->get( PublicationDate::class ); }

  public function get_youtube_video() { return $this->get( YoutubeVideo::class ); }

  public function get_blog_url() { return $this->get( BlogUrl::class ); }

  public function get_youtube_video_title() {

    $segment = $this;
    $video = $this->get_youtube_video();

    $segment_name = strval( $segment->get_segment_name() ) . ' #' . $segment->get_item_id();
    $video_name = strval( $video->get_video_name() );

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

    $pub_date = new DateTime( $this->get_publication_date()->to_string() );

    $publish = ( new DateTime( $pub_date->format( 'Y-m-d 23:45:37' ) ) )->getTimestamp();

    $this->is_live = ( new DateTime() )->getTimestamp() > $publish;

    return $this->is_live;

  }

  public function render_link_internal( $text = null, $attrs = [] ) {

    $this->get_youtube_video()->render_link_internal( $text, $attrs );

  }

  public function render_section() { return $this->render(); }

  public function render_section_next() {

    $video_id = $this->get_video_id();

    if ( ! $video_id ) {

      mud_not_possible();

    }

    tag_open( 'section', [ 'class' => 'container loader' ] );

      $link = '?' . get_link( [ 'from' => $video_id ] ) . '#' . $video_id;

      render_link_internal_nofollow(
        'Load More Videos',
        $link,
        TITLE_LOAD_MORE,
      );

    tag_shut( 'section' );

  }

  public function render( mixed $format = null, array $attrs = [] ) : void {

    $heading = 'h2';

    if ( is_string( $format ) ) { $heading = $format; }

    if ( $this->is_null() ) { return; }

    if ( ! $this->is_live() ) { return; }

    $show = $this->get_show();

    $youtube_video = $this->get_youtube_video();

    if ( $youtube_video->is_null() ) { return; }

    $video_id = $youtube_video->get_slug()->to_string();

    tag_open( 'section', [ 'class' => 'clearfix' ] );

      tag_open( $heading, [ 'id' => $video_id ] );

        $this->render_title_prefix();

        $this->render_link_internal();

        $this->render_title_suffix();

      tag_shut( $heading );

      $this->render_breadcrumbs();

      tag_open( 'div', [ 'class' => 'video' ] );

        if ( $video_id ) {

          render_youtube_iframe( $youtube_video->get_slug()->to_string() );

        }
        else {

          tag_open( 'p' );

            out_text( 'Video is not available yet.' );

          tag_shut( 'p' );

        }

        $tags = $this->get_tags();

        tag_open( 'p', [ 'style' => 'margin-top: 20px' ] );

          out_text( 'YouTube hashtags: ' );

          $tags->render_hashtags();

        tag_shut( 'p' );

        tag_open( 'p' );

          out_text( 'Blog tags: ' );

          $tags->render_tags();

        tag_shut( 'p' );

        tag_open( 'p' );

          out_text( 'Tags text: ' );

          out_text( $tags->get_tag_text() );

        tag_shut( 'p' );

      tag_shut( 'div' );

      tag_open( 'dl', [ 'class' => 'video-details' ] );

        if ( ! $this->get_blog_url()->is_null() ) {

          tag_text( 'dt', 'Show Notes' );

          tag_open( 'dd' );

            render_link_external(
              'Show Notes',
              $this->get_blog_url()->to_string(),
              TITLE_SHOW_NOTES,
            );

          tag_shut( 'dd' );

        }


        tag_text( 'dt', 'Date Published' );
        tag_text( 'dd', $this->get_publication_date() );

        if ( ! $youtube_video->get_duration()->is_null() ) {

          tag_text( 'dt', 'Video Duration' );
          tag_text( 'dd', $youtube_video->get_duration() );

        }

        tag_text( 'dt', 'YouTube Channel' );
        tag_open( 'dd' );

          $show->get_channel()->render();

        tag_shut( 'dd' );

        tag_text( 'dt', 'YouTube Video Link' );
        tag_open( 'dd' );

          $youtube_video->render_external_link();

        tag_shut( 'dd' );

        tag_text( 'dt', 'Generous Sponsors' );
        tag_html( 'dd', $show->get_sponsor_list_html() );

        if ( ! $show->get_silly_job_title()->is_null() ) {

          // 2024-06-16 jj5 - OLD:
          //tag_text( 'dt', 'Silly Job Title' );

          tag_open( 'dt' );

            render_link_internal(
              'Silly Job Title',
              url_base() . '/#silly-job-title',
              TITLE_SILLY_JOB_TITLE,
            );

          tag_shut( 'dt' );

          tag_text( 'dd', $show->get_silly_job_title() );

        }

        $this->render_extra_video_attributes();

        $book = $this->get_book();

        if ( ! $book->is_null() ) {

          if ( $book->get_name() ) {

            tag_text( 'dt', 'Book Title' );
            tag_text( 'dd', $book->get_name() );

          }

          if ( ! $book->get_edition()->is_null() ) {

            tag_text( 'dt', 'Book Edition' );
            tag_text( 'dd', $book->get_edition() );

          }

          if ( ! $book->get_author()->is_null() ) {

            if ( $book->get_author()->get_count() === 1 ) {

              tag_text( 'dt', 'Book Author' );

            }
            else {

              tag_text( 'dt', 'Book Authors' );

            }

            tag_text( 'dd', $book->get_author() );

          }

          if ( ! $book->get_copyright_year()->is_null() ) {

            tag_text( 'dt', 'Book Copyright' );
            tag_text( 'dd', "© " . $book->get_copyright_year()->format() );

            tag_text( 'dt', 'Book Age' );

            $age = $book->get_age();

            if ( $age === 1 ) {

              tag_text( 'dd', '1 year old' );

            }
            else {

              tag_text( 'dd', "$age years old" );

            }
          }

          if ( ! $book->get_page_count()->is_null() ) {

            tag_text( 'dt', 'Book Pages' );
            tag_text( 'dd', number_format( $book->get_page_count()->get_value() ) . ' pages' );

          }

          $link_list = $book->get_affiliate_link_list();

          if ( count( $link_list ) ) {

            tag_text( 'dt', 'Purchase this book' );

            tag_open( 'dd' );

              tag_open( 'ul' );

                foreach ( $link_list as $link ) {

                  tag_open( 'li' );

                    $link->render();

                  tag_shut( 'li' );

                }

              tag_shut( 'ul' );

            tag_shut( 'dd' );

          }
        }

        tag_text( 'dt', 'Permanent Link' );

        tag_open( 'dd' );

          render_link_internal(
            'Permanent Link',
            $this->get_video()->get_internal_url(),
            TITLE_PERMALINK,
          );

        tag_shut( 'dd' );

        tag_text( 'dt', 'Patreon Announcement' );

        tag_open( 'dd' );

          $patreon_url = $this->get_video()->get_segment()->get_patreon_url()->to_string();

          $patreon_link_text = str_replace( 'https://www.', '', $patreon_url );

          render_link_external(
            $patreon_link_text,
            $patreon_url,
            TITLE_PATREON_POST,
          );

        tag_shut( 'dd' );

      tag_shut( 'dl' );

    tag_shut( 'section' );

  }
}

class NullSegment extends Segment {

  use NullThingMixin;

  public function get_channel() { return NullChannel::Instance(); }

  public function get_show_type() { return NullShowType::Instance(); }

  public function get_feature() { return NullFeature::Instance(); }

}
