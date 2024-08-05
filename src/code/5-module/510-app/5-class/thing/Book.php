<?php

function book() {

  return new_thing( Book::class, func_get_args() );

}

class Book extends AppThing {

  public static function sort( &$list ) {

    usort( $list, function( $a, $b ) {

      $result = $b->get_age() <=> $a->get_age();

      if ( $result !== 0 ) { return $result; }

      $result = $a->get_video_date()->get_timestamp() <=> $b->get_video_date()->get_timestamp();

      if ( $result !== 0 ) { return $result; }

      $result = $a->get_page_count() <=> $b->get_page_count();

      return $result;

    });

  }

  public function get_type() {

    if ( $this->is_new() ) { return 'New Book'; }

    return 'Old Book';

  }

  public function is_new() {

    return ! $this->is_old();

  }

  public function is_old() {

    $copyright_year = $this->get_copyright_year()->get_value();

    if ( $copyright_year < 2000 ) { return true; }

    return false;

  }

  public function get_name() { return $this->get_title(); }

  public function get_title() {

    /*
    if ( $this->title === null ) {

      $edition = $this->get_edition();

      if ( $edition->is_null() || $edition->get_value() === 1 ) {

        $edition_name = '';

      }
      else {

        $edition_name = " $edition";

      }

      $name = 

      $this->title = title( "{$name}{$edition_name}" );

    }
    */

    return $this->get( Name::class );

  }

  public function get_edition() { return $this->get( Edition::class ); }
  
  public function get_author() { return $this->get( Author::class ); }

  public function get_copyright_year() { return $this->get( CopyrightYear::class ); }

  public function get_age() : int {

    $current_year = intval( date( 'Y' ) );
    $copyright_year = $this->get_copyright_year()->get_value();

    return $current_year - $copyright_year;

  }

  public function get_page_count() { return $this->get( PageCount::class ); }

  public function get_video_date() {

    return $this->get_parent()->get_publication_date();

  }

  public function get_segment() {

    return $this->get_ancestor( Segment::class );

  }

  public function get_show_type() {

    return $this->get_segment()->get_show_type();

  }

  public function get_channel() {

    return $this->get_segment()->get_channel();

  }

  public function get_youtube_video() {

    return $this->get_segment()->get_youtube_video();

  }

  public function get_affiliate_link_list() {

    return $this->get_list( AffiliateLink::class );

  }
}

class NullBook extends Book {

  use NullThingMixin;

  public function get_type() { return ''; }

  public function is_new() { return false; }

  public function is_old() { return false; }

}
