<?php

class AppStash extends MudStash {

  private $value_map = [];

  private $item_list = [];

  private $item_map = [];

  private $item_id_map = [];

  private $item_slug_map = [];

  private $item_name_map = [];

  public function get_channel( $slug ) {

    return $this->get_item_by_slug( Channel::class, $slug );

  }

  public function get_show_type( $slug ) {

    return $this->get_item_by_slug( ShowType::class, $slug );

  }

  public function get_feature( $slug ) {

    return $this->get_item_by_slug( Feature::class, $slug );

  }

  public function render( mixed $format = null, array $attrs = [] ): void {

    if (  $this->render_document() ) {

      $this->render_document_head( 'AppStash' );

    }

      tag_open( 'ul' );

        tag_open( 'li' );

          render_link_internal( 'Home', url_base() . '/#heading', TITLE_HOMEPAGE );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal( 'Value Map', '#value-map', 'Value Map' );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal( 'Item Map', '#item-map', 'Item Map' );

        tag_shut( 'li' );

      tag_shut( 'ul' );

      tag_text( 'h1', 'Value Map', [ 'id' => 'value-map' ] );

      $this->render_map_table( $this->value_map );

      tag_text( 'h1', 'Item Map', [ 'id' => 'item-map' ] );

      $this->render_map_table( $this->item_map );

    if (  $this->render_document() ) {

      $this->render_document_foot();

    }
  }

  private $render_document = null;

  protected function render_document() {

    if ( $this->render_document === null ) {

      $this->render_document = ! doc_is_initialized();

    }

    return $this->render_document;

  }

  private function render_map_table( $map ) {

    $value_types = array_keys( $map );

    tag_open( 'table', [ 'class' => 'nice-table sortable' ] );

      tag_open( 'thead' );

        tag_open( 'tr' );

        tag_text( 'th', '#' );

        tag_text( 'th', 'Class' );

        tag_text( 'th', 'Count' );

        tag_shut( 'tr' );

      tag_shut( 'thead' );

      tag_open( 'tbody' );

        $row_number = 0;

        foreach ( $value_types as $value_type ) {

          $row_number++;

          tag_open( 'tr' );

            tag_text( 'td', $row_number );

            tag_text( 'td', $value_type );

            tag_text(
              'td',
              number_format( count( $map[ $value_type ] ) ),
              [ 'class' => 'number right' ]
            );

          tag_shut( 'tr' );

        }

      tag_shut( 'tbody' );

    tag_shut( 'table' );

  }

  protected function render_document_head( string $title ) {

    doc_init();

    tag_open( 'html' );

      tag_open( 'head' );

        tag_text( 'title', $title );

        //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://www.staticmagic.net/global/common.css' ] );
        //tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://www.staticmagic.net/global/table.css' ] );
        //tag_bare( 'script', [ 'src' => 'https://www.staticmagic.net/global/table.js' ] );
        tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://d27cckvuinr11o.cloudfront.net/global/common.css' ] );
        tag_bare( 'link', [ 'rel' => 'stylesheet', 'href' => 'https://d27cckvuinr11o.cloudfront.net/global/table.css' ] );
        tag_bare( 'script', [ 'src' => 'https://d27cckvuinr11o.cloudfront.net/global/table.js' ] );

      tag_shut( 'head' );

      tag_open( 'body' );

  }

  protected function render_document_foot() {

      tag_shut( 'body' );

    tag_shut( 'html' );

  }

  public function new_value( string $class, mixed $arg ) {

    //if ( is_string( $arg ) ) { $arg = trim( $arg ); }

    $value = new $class( $arg );

    if ( is_a( $value, IMudPrice::class ) ) {

      $currency_override = $_GET[ 'currency' ] ?? null;

      if ( $currency_override ) {

        $value = $value->get_price_in_currency( $currency_override );

      }
    }

    $this->value_map[ $class ][] = $value;

    return $value;

  }

  public function new_thing( string $class, array $args ) {

    $args = $this->trim_args( $args );

    if ( ! array_key_exists( $class, $this->item_id_map ) ) {

      $this->item_id_map[ $class ] = 0;

    }

    $this->item_id_map[ $class ]++;

    $id = $this->item_id_map[ $class ];

    $slug = null;

    foreach ( $args as $arg ) {

      if ( is_a( $arg, Slug::class ) ) { $slug = $arg->to_string(); break; }

    }

    $name = null;

    foreach ( $args as $arg ) {

      if ( is_a( $arg, Name::class ) ) { $name = $arg->to_string(); break; }

    }

    $item = new $class( $id, $args );

    $this->item_list[] = $item;

    $this->item_map[ $class ][] = $item;

    if ( $slug ) {

      $this->item_slug_map[ $class ][ $slug ] = $item;

    }

    if ( $name ) {

      $this->item_name_map[ $class ][ $name ] = $item;

    }

    return $item;

  }

  public function get_item_by_slug( string $class, string $slug ) {

    //var_dump( $this->item_slug_map[ 'Channel' ][ '@InTheLabWithJayJay' ] ); exit;
    //var_dump( $this->item_slug_map ); exit;

    $result = $this->item_slug_map[ $class ][ $slug ] ?? null;

    if ( $result ) { return $result; }

    return self::get_null( $class );

  }

  public function get_item_by_name( string $class, string $name ) {

    $result = $this->item_name_map[ $class ][ $name ] ?? null;

    if ( $result ) { return $result; }

    return self::get_null( $class );

  }

  public function get_list( string $class ) {

    $result = $this->item_map[ $class ] ?? null;

    if ( $result !== null ) { return $result; }

    $result = [];

    foreach ( $this->item_list as $item ) {

      if ( is_a( $item, $class ) ) { $result[] = $item; }

    }

    $this->item_map[ $class ] = $result;

    return $result;

  }

  public function get_last( string $class ) {

    $list = $this->item_map[ $class ] ?? [];

    if ( $list ) { return $list[ count( $list ) - 1 ]; }

    return self::get_null( $class );

  }

  public function trim_args( array $args ) {

    $result = [];

    foreach ( $args as $arg ) {

      $value = $arg;

      if ( is_string( $value ) ) { $value = trim( $value ); }

      $result[] = $value;

    }

    return $result;

  }

  public function get_html_id( $string ) {

    $string = preg_replace( '/[^❤️a-z0-9.-]+/i', '-', $string );

    $string = preg_replace( '/-+/', '-', $string );

    return $string;

  }

  public static function get_null( $class ) {

    return mud_null_object();

  }

  private $channel_one = null;

  public function get_channel_one() {

    if ( $this->channel_one === null ) {

      $this->channel_one = $this->get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

    }

    return $this->channel_one;

  }

  public function get_main_show_type_selection() {

    $list = app_stash()->get_list( Show::class );

    $list = array_filter(
      $list,
      function( $show ) {
        $segment = $show->get_first_segment();
        if ( ! $segment->is_live() ) { return false; }
        return is_a( $segment, ElectronicsProject::class );
      }
    );

    usort(
      $list,
      function( $a, $b ) {
        return $b->get_publication_date()->get_sort_value() - $a->get_publication_date()->get_sort_value();
      }
    );

    return self::get_thing_list( $list );

  }

  public function get_maxitronix_show_type_selection() {

    $list = app_stash()->get_list( Show::class );

    $list = array_filter(
      $list,
      function( $show ) {
        $segment = $show->get_first_segment();
        if ( ! $segment->is_live() ) { return false; }
        return is_a( $segment, MaxitronixSegment::class );
      }
    );

    usort(
      $list,
      function( $a, $b ) {
        return $b->get_publication_date()->get_sort_value() - $a->get_publication_date()->get_sort_value();
      }
    );

    return self::get_thing_list( $list );

  }

  public function get_maxitronix_kit_selection( $kit ) {

    $list = app_stash()->get_list( Show::class );

    $list = array_filter(
      $list,
      function( $show ) use ( $kit ) {
        $segment = $show->get_first_segment();
        if ( ! $segment->is_live() ) { return false; }
        if ( ! is_a( $segment, MaxitronixSegment::class ) ) { return false; }
        return $kit === $segment->get_maxitronix_kit_name()->to_string();
      }
    );

    usort(
      $list,
      function( $a, $b ) {
        return $a->get_publication_date()->get_sort_value() - $b->get_publication_date()->get_sort_value();
      }
    );

    return self::get_thing_list( $list );

  }

  public function get_extra_content_selection() {

    $list = app_stash()->get_list( Show::class );

    $list = array_filter(
      $list,
      function( $show ) {
        $segment = $show->get_first_segment();
        if ( ! $segment->is_live() ) { return false; }
        return is_a( $segment, ExtraContent::class );
      }
    );

    usort(
      $list,
      function( $a, $b ) {
        return $b->get_publication_date()->get_sort_value() - $a->get_publication_date()->get_sort_value();
      }
    );

    return self::get_thing_list( $list );

  }

  public function get_old_book_selection() {

    $list = app_stash()->get_list( OldBookTeardown::class );

    $list = array_filter(
      $list,
      function( $segment ) {
        if ( ! $segment->is_live() ) { return false; }
        return true;
      }
    );

    usort(
      $list,
      function( $a, $b ) {
        return $b->get_publication_date()->get_sort_value() - $a->get_publication_date()->get_sort_value();
      }
    );

    return self::get_thing_list( $list );

  }

  public function get_new_book_selection() {

    $list = app_stash()->get_list( NewBookTeardown::class );

    $list = array_filter(
      $list,
      function( $show ) {
        $segment = $show->get_first_segment();
        if ( ! $segment->is_live() ) { return false; }
        return true;
      }
    );

    usort(
      $list,
      function( $a, $b ) {
        return $b->get_publication_date()->get_sort_value() - $a->get_publication_date()->get_sort_value();
      }
    );

    return self::get_thing_list( $list );

  }

  public static function get_thing_list( $input_list ) {

    $list = [];

    // 2024-06-28 jj5 - if we're in production mode then only show live videos.
    //
    if ( is_prod() ) {

      foreach ( $input_list as $thing ) {

        if ( $thing->is_live() ) {

          $list[] = $thing;

        }
      }
    }
    else {

      $list = $input_list;

    }

    $from = $_GET[ 'from' ] ?? null;

    if ( ! $from ) {

      $thing_list = array_slice( $list, 0, VIDEO_COUNT );

      $last_index = VIDEO_COUNT;

      $next_show = $last_index < count( $list ) ? $list[ $last_index ] : null;

      return new ThingList( $thing_list, $next_show );

    }

    $from_index = -1;

    foreach ( $list as $index => $show ) {

      $id = strval( $show->get_video_id() );

      if ( $id === $from ) {

        $from_index = $index;

        break;

      }
    }

    if ( $from_index === -1 ) {

      // 2024-07-02 jj5 - THINK: what to do here?

      // 2024-01-26 jj5 - if we couldn't find the video to start from just redirect to the
      // hosting page without the 'from' parameter.

      // 2024-07-02 jj5 - NEW:
      default_redirect( url_base() . '/#heading' );
      // 2024-07-02 jj5 - OLD:
      //default_redirect( '?' . get_link_without( 'from' ) );

    }

    $thing_list = array_slice( $list, $from_index, VIDEO_COUNT );

    $last_index = $from_index + VIDEO_COUNT;

    $next_show = $last_index < count( $list ) ? $list[ $last_index ] : null;

    return new ThingList( $thing_list, $next_show );

  }

  public function get_live_video_list() {

    $list = $this->get_list( Video::class );

    $list = array_values( array_filter(
      $list,
      function( $video ) {
        return $video->is_live();
      }
    ));

    return self::sort_by_publication_date( $list );

  }

  public static function sort_by_publication_date( $list ) {

    usort(
      $list,
      function( $a, $b ) {
        return $b->get_publication_date()->get_sort_value() - $a->get_publication_date()->get_sort_value();
      }
    );

    return $list;

  }
}
