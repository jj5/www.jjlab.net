<?php

class ThingList {

  private $list;
  private $next;

  public function __construct( $list, $next ) {

    foreach ( $list as $thing ) {

      assert( $thing->is_live() );

    }

    assert( $next === null || $next->is_live() );

    $this->list = $list;
    $this->next = $next;

  }

  public function get_list() {

    return $this->list;

  }

  public function get_next() {

    return $this->next;

  }

  public function render( mixed $format = null, array $attrs = [] ): void {

    if ( $this->list ) {

      $this->render_section_list();

      $this->render_section_next();

    }
    else {

      self::render_section_empty();

    }
  }

  public function render_section_list() {

    foreach ( $this->list as $thing ) {

      $thing->render_section();

    }
  }

  public function render_section_next() {

    if ( $this->next === null || $this->next->is_null() ) {

      return self::render_section_end();

    }

    if ( ! $this->next->get_video_id() ) {

      return self::render_section_end();

    }

    $this->next->render_section_next();

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

}
