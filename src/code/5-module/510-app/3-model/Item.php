<?php

class Item extends MudGadget implements INullable {

  protected static $null_map = [];

  protected $debug_string = null;

  protected $item_id = null;
  protected $property_list = [];
  protected $property_map = [];
  protected $parent = null;

  public function __construct( int $item_id = 0, array $args = [] ) {

    parent::__construct();

    $property_list = [];

    foreach ( $args as $property ) {

      if ( ! is_a( $property, Item::class ) ) { continue; }

      $property->set_parent( $this );

      $property_list[] = $property;
      $property_map[ get_class( $property ) ][] = $property;

    }

    $this->item_id = $item_id;
    $this->property_list = $property_list;

    $class = get_class( $this );
    $slug = self::find_string( $property_list, Slug::class );
    $name = self::find_string( $property_list, Name::class );

    $this->debug_string = "$class-$item_id-$slug-$name";

  }

  public function __toString() { return $this->to_string(); }

  private static function find_string( $list, $class ) {

    foreach ( $list as $item ) {

      if ( is_a( $item, $class ) ) { return strval( $item ); }

    }

    return 'NA';

  }

  // 2024-06-28 jj5 - this probably shouldn't be in this class... oh well.
  //
  public function render_rss_link() {

    $title = null;
    $url = null;

    $this->get_rss_info( $title, $url );

    tag_open(
      'a',
      [
        'href' => $url,
        'class' => 'rss',
        'title' => $title,
      ]
    );

      tag_bare(
        'img',
        [
          'src' => url_base() . '/res/img.php/rss/rss-40674_50.png?v=' . get_resource_version(),
          'style' => 'height: 24px; display: inline-block; margin: 0px 2px; vertical-align: top;',
        ]
      );

    tag_shut( 'a' );

  }

  public function is_null() : bool { return false; }

  public function is_empty() {

    if ( $this->is_null() ) { return true; }

    return count( $this->property_list ) === 0;

  }

  public function set_parent( $parent ) { $this->parent = $parent; }

  public function get_parent() { return $this->parent ?? NullItem::Instance(); }

  public function get_closest( $class ) {

    if ( is_a( $this, $class ) ) { return $this; }

    $result = $this->get( $class );

    if ( ! $result->is_null() ) { return $result; }

    $parent = $this->get_parent();

    $null_class = 'Null' . $class;

    if ( $parent->is_null() ) { return $null_class::Instance(); }

    return $parent->get_closest( $class );

  }

  public function get_item_id() { return $this->item_id; }

  public function get_slug() { return $this->get( Slug::class )->to_string(); }

  public function get_title() { return $this->get_name(); }

  public function get_name() { return $this->get( Name::class )->to_string(); }

  public function to_string() {

    return self::class . '-' . $this->get_item_id();

  }

  public function to_html() {

    return henc( $this->to_string() );

  }

  public function to_nbsp() {

    return str_replace( ' ', '&nbsp;', $this->to_html() );

  }

  public static function get_null( $class_or_object ) {
  
    $class = is_string( $class_or_object ) ? $class_or_object : get_class( $class_or_object );

    $null_class = 'Null' . $class;

    return $null_class::Instance();

  }

  protected function get( $class ) {

    /*
    foreach ( $this->property_list as $property ) {

      if ( is_a( $property, $class ) ) { return $property; }

    }

    return self::get_null( $class );
    */




    // 2024-01-16 jj5 - THINK: should we return the first or the last value nominated?

    $list = $this->property_map[ $class ] ?? [];

    if ( $list ) { return $list[ 0 ]; }

    foreach ( $this->property_list as $property ) {

      if ( is_a( $property, $class ) ) { $list[] = $property; }

    }

    $this->property_map[ $class ] = $list;

    if ( $list ) { return $list[ 0 ]; }

    return self::get_null( $class );

  }

  protected function get_list( $class ) {

    /*
    $result = [];

    foreach ( $this->property_list as $property ) {

      if ( is_a( $property, $class ) ) { $result[] = $property; }

    }

    return $result;
    */




    if ( array_key_exists( $class, $this->property_map ) ) {

      // 2024-01-24 jj5 - this list can be empty...

      return $this->property_map[ $class ];

    }

    $this->get( $class );

    return $this->property_map[ $class ];

  }

  protected function has( $class ) {

    return count( $this->get_list( $class ) ) !== 0;

  }
}

class NullItem extends Item {

  use NullItemMixin;

}
