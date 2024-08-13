<?php

global $g_show_head, $g_show_curr;

$g_show_head = null;

function show() {

  global $g_show_head, $g_show_curr;

  //$last_show = get_last( Show::class );

  $show = new_thing( Show::class, [ sponsor_name( 'Patreon Supporters' ), ...func_get_args() ] );

  if ( $g_show_head === null ) {

    $g_show_head = $show;
    $g_show_curr = $show;

  }
  else {

    $g_show_curr->set_next( $show );
    $g_show_curr = $show;

  }

  return $show;

}

class Show extends AppThing {

  use LinkedList;

  public function get_live_video_list() {

    $segment_list = $this->get_list( Segment::class );

    $result = [];

    foreach ( $segment_list as $segment ) {

      $video = $segment->get_video();

      if ( ! $video->is_live() ) { continue; }

      $result[] = $video;

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


  public function get_sponsor_list_html( $text = null, $attrs = [] ) {

    $result_html = [];

    foreach ( $this->get_sponsor_list() as $sponsor ) {

      $result_html[] = $sponsor->get_link_html( $text, $attrs );

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

      render_link_internal_nofollow(
        'Load More Videos',
        $link,
        TITLE_LOAD_MORE,
      );

    tag_shut( 'div' );

  }

  public static function render_section_end() {

    tag_open( 'section', [ 'class' => 'container end' ] );

      tag_text( 'p', "You have reached the end of these videos!", [ 'class' => 'end' ] );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'You can return to the ' );

        render_link_internal(
          'home page',
          url_base() . '/',
          TITLE_LINK_HOME,
        );

        out_text( ' or maybe check out my ' );

        render_link_internal(
          'equipment',
          url_base() . '/equipment.php#heading',
          TITLE_EQUIPMENT,
        );

        out_text( '. I will publish more videos soon!' );

      tag_shut( 'p' );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'Head over to ' );

        render_link_external(
          '@InTheLabWithJayJay',
          'https://www.youtube.com/@InTheLabWithJayJay',
          TITLE_YOUTUBE_MAIN,
        );

        out_text( ' and subscribe in order to be notified when there are new videos.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

  }

  public static function render_section_empty() {

    tag_open( 'section', [ 'class' => 'container empty' ] );

      tag_text( 'p', "None of these videos have been published yet.", [ 'class' => 'end' ] );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'You can return to the' );

        render_link_internal(
          'home page',
          url_base() . '/',
          TITLE_LINK_HOME,
        );

        out_text( ' or maybe check out my ' );

        render_link_internal(
          'equipment',
          url_base() . '/equipment.php#heading',
          TITLE_EQUIPMENT,
        );

        out_text( '. I will publish more videos soon!' );

      tag_shut( 'p' );

      tag_open( 'p', [ 'class' => 'small' ] );

        out_text( 'Head over to ' );

        render_link_external(
          '@InTheLabWithJayJay',
          'https://www.youtube.com/@InTheLabWithJayJay',
          TITLE_YOUTUBE_MAIN,
        );

        out_text( ' and subscribe in order to be notified when there are new videos.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

  }

  public function get_channel() {

    return $this->get_show_type()->get_channel();

  }

  public function get_show_type() {

    switch ( $this->get_show_enum() ) {

      case ShowEnum::MainShow:

        return get_item_by_slug( ShowType::class, ShowEnum::MainShow->value );

      case ShowEnum::SpecialShow :

        return get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

      case ShowEnum::ExtraShow:

        return get_item_by_slug( ShowType::class, ShowEnum::ExtraShow->value );

      default :

        mud_not_supported();

    }
  }

  public function get_show_enum() {

    if ( $this->has( ElectronicsProject::class ) ) {

      return ShowEnum::MainShow;

    }

    if ( $this->has( OldBookTeardown::class ) ) {

      return ShowEnum::MainShow;

    }

    if ( $this->has( ExtraContent::class ) ) {

      return ShowEnum::ExtraShow;

    }

    return ShowEnum::SpecialShow;

  }

  public function get_first_segment() : Segment {

    return $this->get( Segment::class );

  }

}

class NullShow extends Show {

  use NullThingMixin;

}
