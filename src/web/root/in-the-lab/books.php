<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  $books = get_list( Book::class );

  foreach ( get_list( BookSegment::class ) as $segment ) {

    $books[] = $segment->get_book();

  }

  Book::sort( $books );

  switch ( $path_info ) {

    case '' :

      return render_books_main( $books );

    default :

      return default_redirect( url_base() . '/books.php#books' );

  }
}

function render_books_main( $books ) {

  render_head( 'Books' );

    tag_open( 'section', [ 'class' => 'table' ] );

      tag_text( 'h2', 'Books', [ 'id' => 'books' ] );

      tag_open( 'p' );

        out_text( "This page is " );

        render_link_internal(
          'secret',
          url_base() . '/secret.php#heading',
          TITLE_SECRET,
        );

        out_text( ". Shhh! It's a list of all the books I've covered. " );

        out_text( "It's secret because it's a hack and only looks good on a 4K monitor. It won't work well on a small screen. " );
        out_text( "There is also a " );

        render_link_internal(
          'videos index',
          url_base() . '/videos.php#videos',
          TITLE_VIDEO_INDEX,
        );

        out_text( "." );

      tag_shut( 'p' );

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

            //if ( $book->is_null() ) { continue; }

            tag_open( 'tr' );

              tag_text( 'td', $number++ );
              tag_text( 'td', $book->get_type() );

              tag_open( 'td', [ 'class' => 'right' ] );

                if ( ! $book->get_youtube_video()->is_null() ) {

                  render_link_internal(
                    $book->get_video_date(),
                    $book->get_youtube_video()->get_internal_url(),
                    'Click here to watch the video.'
                  );

                }

              tag_shut( 'td' );

              tag_text( 'td', $book->get_title() );
              tag_text( 'td', $book->get_edition() );
              tag_text( 'td', $book->get_author() );
              tag_text( 'td', $book->get_copyright_year()->format(), [ 'class' => 'right' ] );
              tag_text( 'td', $book->get_age(), [ 'class' => 'right' ] );
              tag_text( 'td', $book->get_page_count(), [ 'class' => 'right' ]  );
              tag_open( 'td' );

                $is_first = true;

                foreach ( $book->get_affiliate_link_list() as $link ) {

                  if ( $is_first ) { $is_first = false; } else { out_text( ', ' ); }

                  $link->render();

                }

              tag_shut( 'td' );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
