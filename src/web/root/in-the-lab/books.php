<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  $books = array_reverse( get_list( Book::class ) );

  switch ( $path_info ) {

    case '' :
      
      return render_books( $books );

    default :

      return default_redirect( url_base() . '/books.php' );

  }
}

function render_books( $books ) {

  render_head( 'Books' );

    tag_open( 'section', [ 'class' => 'table' ] );

      tag_text( 'h2', 'Books' );

      tag_open( 'table', [ 'class' => 'sortable' ] );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Type' );
            tag_text( 'th', 'Video' );
            tag_text( 'th', 'Title' );
            tag_text( 'th', 'Edition' );
            tag_text( 'th', 'Author(s)' );
            tag_text( 'th', 'Copyright' );
            tag_text( 'th', 'Age' );
            tag_text( 'th', 'Pages' );
            tag_text( 'th', 'Purchase' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          $number = 1;

          foreach( $books as $book ) {

            if ( $book->is_null() ) { continue; }

            tag_open( 'tr' );

              tag_text( 'td', $number++ );
              tag_text( 'td', $book->get_type() );
              
              tag_open( 'td', [ 'class' => 'right' ] );

                if ( $book->get_youtube_video()->is_null() ) {


                }
                else {

                  tag_text(
                    'a',
                    $book->get_video_date(),
                    [
                      'href' => $book->get_youtube_video()->get_internal_url(),
                      'class' => 'internal',
                    ]
                  );

                }

              tag_shut( 'td' );

              tag_text( 'td', $book->get_title() );
              tag_text( 'td', $book->get_edition() );
              tag_text( 'td', $book->get_author() );
              tag_text( 'td', $book->get_copyright_year(), [ 'class' => 'right' ] );
              tag_text( 'td', $book->get_age(), [ 'class' => 'right' ] );
              tag_text( 'td', $book->get_page_count(), [ 'class' => 'right' ]  );
              tag_open( 'td' );

                $is_first = true;

                foreach ( $book->get_affiliate_link_list() as $link ) {

                  if ( $is_first ) { $is_first = false; } else { out_text( ', ' ); }

                  //tag_text( 'a', $link->get_link_text(), [ 'href' => $link->get_link_href() ] );

                  $link->render();

                }

              tag_shut( 'td' );              

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

  render_foot();

}
