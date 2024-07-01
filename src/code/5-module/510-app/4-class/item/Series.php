<?php

function series() {

 $last_series = get_last( Series::class );

  $series = new_item( Series::class, [ sponsor_name( 'Patreon Supporters' ), ...func_get_args() ] );

  $last_series->set_next( $series );

  return $series;
 
}

class Series extends Item {

  use LinkedList;

  public function get_video_list() {

    $segment_list = $this->get_list( Segment::class );

    $result = [];

    foreach ( $segment_list as $segment ) {

      $result[] = $segment->get_video();

    }

    return $result;
    
  }

  public function is_live() { return $this->get_first_segment()->is_live(); }

  public function get_publication_date() { return $this->get_first_segment()->get_publication_date(); }

  public function get_old_book_teardown() {

    return $this->get( OldBookTeardown::class );

  }

  public function get_new_book_teardown() {

    return $this->get( NewBookTeardown::class );

  }

  public function get_video_id() {

    return $this->get_first_segment()->get_video_id();

  }

  public function get_silly_job_title() {

    return $this->get( SillyJobTitle::class );

  }


  public function get_sponsor_list_html() {

    $result_html = [];

    foreach ( $this->get_sponsor_list() as $sponsor ) {

      $result_html[] = $sponsor->get_link_html();

    }

    return implode( ', ', $result_html );

  }

  public function get_sponsor_list() {

    $result = [];

    foreach ( $this->get_list( SponsorName::class ) as $sponsor_name ) {

      $sponsor = get_item_by_name( Sponsor::class, $sponsor_name );

      if ( $sponsor === null ) {

        dump( $sponsor_name );

      }

      $result[] = $sponsor;

    }

    return $result;

  }

  public function render_section() {

    $list = $this->get_list( Segment::class );

    $first = array_shift( $list );

    $first->render( 'h2' );

    foreach ( $list as $segment ) {

      $segment->render( 'h3' );

    }
  }

  public function render_section_next() {

    $video_id = $this->get_video_id();

    if ( ! $video_id ) {

      mud_not_possible();

    }

    tag_open( 'div', [ 'class' => 'container loader' ] );

      $link = '?' . get_link( [ 'from' => $video_id ] ) . '#' . $video_id;

      tag_text(
        'a',
        'Load More Videos',
        [
          'href' => $link,
          'class' => 'internal',
          'title' => TITLE_LOAD_MORE,
        ]
      );

    tag_shut( 'div' );
    
  }

  public static function render_section_end() {

    tag_open( 'section', [ 'class' => 'container end' ] );

      tag_text( 'p', "You have reached the end of these videos!", [ 'class' => 'end' ] );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'You can return to the' );

        tag_text(
          'a',
          'home page',
          [
            'href' => url_base() . '/',
            'class' => 'internal',
            'title' => TITLE_LINK_HOME,
          ]
        );

        out_text( ' or maybe check out my ' );

        tag_text(
          'a',
          'equipment',
          [
            'href' => url_base() . '/equipment.php',
            'class' => 'internal',
            'title' => TITLE_EQUIPMENT
          ]
        );

        out_text( '. I will publish more videos soon!' );

      tag_shut( 'p' );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'Head over to ' );

        tag_text(
          'a',
          '@InTheLabWithJayJay',
          [
            'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
            'class' => 'external',
            'target' => '_blank',
            'title' => TITLE_YOUTUBE_MAIN,
          ]
        );

        out_text( ' and subscribe in order to be notified when there are new videos.' );

      tag_shut( 'p' );

    tag_shut( 'section' );
    
  }

  public static function render_section_empty() {

    tag_open( 'section', [ 'class' => 'container end' ] );

      tag_text( 'p', "None of these videos have been published yet.", [ 'class' => 'end' ] );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'You can return to the' );

        tag_text(
          'a',
          'home page',
          [
            'href' => url_base() . '/',
            'class' => 'internal',
            'title' => TITLE_LINK_HOME,
          ]
        );

        out_text( ' or maybe check out my ' );

        tag_text(
          'a',
          'equipment',
          [
            'href' => url_base() . '/equipment.php',
            'class' => 'internal',
            'title' => TITLE_EQUIPMENT,
          ]
        );

        out_text( '. I will publish more videos soon!' );

      tag_shut( 'p' );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'Head over to ' );

        tag_text(
          'a',
          '@InTheLabWithJayJay',
          [
            'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
            'class' => 'external',
            'target' => '_blank',
            'title' => TITLE_YOUTUBE_MAIN,
          ]
        );

        out_text( ' and subscribe in order to be notified when there are new videos.' );

      tag_shut( 'p' );

    tag_shut( 'section' );
    
  }

  public function get_channel() {

    return $this->get_show()->get_channel();

  }

  public function get_show() {

    switch ( $this->get_show_type() ) {

      case ShowType::MainShow:

        return get_item_by_slug( Show::class, 'main-show' );

      case ShowType::SpecialShow :

        return get_item_by_slug( Show::class, 'special-show' );

      case ShowType::ExtraShow:

        return get_item_by_slug( Show::class, 'extra-show' );

      default :

        mud_not_supported();

    }
  }

  public function get_show_type() {

    if ( $this->has( ElectronicsProject::class ) ) {

      return ShowType::MainShow;

    }

    if ( $this->has( OldBookTeardown::class ) ) {

      return ShowType::MainShow;

    }

    if ( $this->has( ExtraContent::class ) ) {

      return ShowType::ExtraShow;

    }

    return ShowType::SpecialShow;

  }

  public function get_first_segment() {

    return $this->get( Segment::class );

  }

}

class NullSeries extends Series {

  use NullItemMixin;

}
