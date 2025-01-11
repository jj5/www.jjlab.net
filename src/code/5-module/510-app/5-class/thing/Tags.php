<?php

function tags() {

  $args = [];

  foreach ( func_get_args() as $arg ) {

    if ( is_string( $arg ) ) {

      $args[] = tag( $arg );

    }
    else {

      $args[] = $arg;

    }

  }

  return new_thing( Tags::class, $args );

}

class Tags extends AppThing {

  public function get_count() {

    return count( $this->get_tag_list() );

  }

  public function render_tags() {

    $tag_list = $this->get_tag_list();

    $counter = 0;

    foreach ( $tag_list as $tag ) {

      $counter++;

      if ( $counter > 1 ) {

        out_text( ', ' );

      }

      $slug = $this->format_tag_slug( $tag );

      $url = "https://blog.jj5.net/blog/tag/$slug/";

      tag_text( 'a', $tag, [ 'href' => $url ] );

    }
  }

  public function format_tag_slug( $tag ) {

    $tag = iconv( 'UTF-8', 'ASCII//TRANSLIT', $tag );

    return preg_replace( '/[^a-z0-9_]/i', '-', strtolower( $tag ) );

  }

  public function render_hashtags() {

    $hashtag_list = $this->get_hashtag_list();

    $counter = 0;

    foreach ( $hashtag_list as $hashtag ) {

      $counter++;

      if ( $counter > 1 ) {

        out_text( ' ' );

      }

      $hashtag = $this->format_hashtag( $hashtag );

      $slug = strtolower( $hashtag );

      $url = "https://www.youtube.com/hashtag/$slug";

      tag_text( 'a', '#' . $hashtag, [ 'href' => $url ] );

    }
  }

  public function format_hashtag( $hashtag ) {

    $hashtag = iconv( 'UTF-8', 'ASCII//TRANSLIT', $hashtag );

    $hashtag = preg_replace( '/[^a-z0-9_]/i', '-', $hashtag );

    return str_replace( '-', '', $hashtag );

  }

  private $tag_text = null;

  public function get_tag_text() {

    if ( $this->tag_text === null ) {

      $this->tag_text = implode( ' ', $this->get_tag_list() );

    }

    return $this->tag_text;

  }

  private $tag_list = null;

  public function get_tag_list() {

    if ( $this->tag_list === null ) {

      $result = [];

      foreach ( $this->get_list( Tag::class ) as $tag ) {

        $string = $tag->to_string();

        switch ( $string ) {

          case 'jjlab' :

            $result[] = 'In The Lab With Jay Jay';

            break;

          default :

            $result[] = $string;

        }
      }

      $this->tag_list = $result;

    }

    return $this->tag_list;

  }

  private $hashtag_list = null;

  public function get_hashtag_list() {

    if ( $this->hashtag_list === null ) {

      $result = [];
      $extra = [];

      foreach ( $this->get_list( Tag::class ) as $tag ) {

        $string = $tag->to_string();

        $parts = explode( ' ', $string );

        if ( count( $parts ) > 1 ) {

          $result[] = implode( '', $parts );

          $extra = array_merge( $extra, $parts );

        }
        else {

          $result[] = $string;

        }
      }

      $map = [];

      foreach ( $result as $tag ) {

        $map[ $tag ] = true;

      }

      foreach ( $extra as $tag ) {

        $map[ $tag ] = true;

      }

      $this->hashtag_list = array_keys( $map );

    }

    return $this->hashtag_list;

  }


  public function render( mixed $format = null, array $attrs = [] ): void {

    // 2025-01-08 jj5 - TODO: render this

    /*
    render_link_external(
      $this->get_link_text()->to_string(),
      $this->get_link_href()->to_string(),
      TITLE_LINK_EXTERNAL,
    );
    */

  }

  public function to_html( mixed $format = null ) : string {

    nip_init();

      $this->render();

    nip_done( $result );

    return $result;

  }
}

class NullTags extends Tags {

  use NullThingMixin;

  public function get_tags_text() { return ''; }

}
