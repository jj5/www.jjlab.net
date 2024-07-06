<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  $video_list = array_reverse( get_list( YoutubeVideo::class ) );

  switch ( $path_info ) {

    case '' :

      return render_video_list( $video_list );


    default :

      default_redirect( url_base() . '/videos.php' );

  }
}

function render_video_list( $video_list ) {

  render_head( 'Videos' );

    tag_open( 'section', [ 'class' => 'table' ] );

      tag_text( 'h2', 'Videos', [ 'id' => 'videos' ] );

      tag_open( 'p' );

        out_text( "This page is " );

        tag_text(
          'a',
          'secret',
          [
            'href' => url_base() . '/secret.php',
            'class' => 'internal',
            'rel' => 'follow',
            'title' => TITLE_SECRET,
          ]
        );

        out_text( ". Shhh! It's a list of all the videos I make across both my " );

        tag_text(
          'a',
          'channels',
          [
            'href' => url_base() . '/channel.php',
            'class' => 'internal',
            'rel' => 'follow',
            'title' => TITLE_CHANNEL_INDEX,
          ]
        );

        out_text( ". " );
        out_text( "It's secret because it's a hack and only looks good on a 4K monitor. It won't work well on a small screen. " );
        out_text( "There is also a " );

        tag_text(
          'a',
          'books index',
          [
            'href' => url_base() . '/books.php',
            'class' => 'internal',
            'rel' => 'follow',
            'title' => TITLE_BOOK_INDEX,
          ]
        );

        out_text( "." );

      tag_shut( 'p' );

      /*
      tag_open( 'ul' );

        tag_open( 'li' );

          tag_text(
            'a',
            'youtube.com/@InTheLabWithJayJay',
            [
              'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
              'class' => 'external',
              'target' => '_blank',
              'rel' => 'noopener follow',
              'title' => TITLE_YOUTUBE_MAIN,
            ]
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          tag_text(
            'a',
            'youtube.com/@ElliotsExtras',
            [
              'href' => 'https://www.youtube.com/@ElliotsExtras',
              'class' => 'external',
              'target' => '_blank',
              'rel' => 'noopener follow',
              'title' => TITLE_YOUTUBE_EXTRA,
            ]
          );

        tag_shut( 'li' );
      
      tag_shut( 'ul' );
      */

      tag_open( 'table', [ 'class' => 'sortable' ] );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Date' );
            tag_text( 'th', 'Channel' );
            tag_text( 'th', 'Show Type' );
            tag_text( 'th', 'Feature' );
            tag_text( 'th', 'Video' );
            tag_text( 'th', 'Duration' );
            tag_text( 'th', 'Changes' );
            tag_text( 'th', 'Priority' );
            tag_text( 'th', 'Silly Job Title' );
            tag_text( 'th', 'YouTube Video Title' );
            tag_text( 'th', 'YouTube Video Link' );
            tag_text( 'th', 'Show Notes' );
            tag_text( 'th', 'Sponsors' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          $number = 1;

          foreach( $video_list as $video ) {

            if ( is_prod() && ! $video->is_live() ) { continue; }

            tag_open( 'tr' );

              tag_text( 'td', $number++ );
              tag_text( 'td', $video->get_publication_date(), [ 'class' => 'right' ] );

              tag_open( 'td' );

                $video->get_channel()->render_internal_link( null, [ 'rel ' => 'follow' ] );

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->get_show_type()->render_internal_link( null, [ 'rel ' => 'follow' ] );

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->get_feature()->render_internal_link( null, [ 'rel ' => 'follow' ] );

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->render_internal_link( null, [ 'rel ' => 'follow' ] );

              tag_shut( 'td' );

              $sort_value = $video->get_duration()->get_sort_value();

              tag_open(
                'td',
                [
                  'class' => 'right',
                  'data-sort-value' => $sort_value,
                ]
              );

                out_text( $video->get_duration() );

              tag_shut( 'td' );

              $sort_value = get_data_sort_value_for_changefreq( $video->get_changefreq() );

              tag_open(
                'td',
                [
                  'data-sort-value' => $sort_value,
                ]
              );

                out_text( $video->get_changefreq()->value );

              tag_shut( 'td' );

              tag_open( 'td', [ 'class' => 'right' ] );

                out_text( $video->get_priority() );

              tag_shut( 'td' );

              tag_open( 'td' );

                if ( $video->get_show_type()->get_slug() === ShowEnum::MainShow->value ) {

                  $video->get_show()->get_silly_job_title()->render();

                }
                else {

                  // 2024-07-05 jj5 - NEW:
                  $video->get_show()->get_silly_job_title()->render();
                  // 2024-07-05 jj5 - OLD: I used to distinguish the silly job title with a line-through if it wasn't a main show...
                  //$video->get_show()->get_silly_job_title()->render( null, [ 'style' => 'text-decoration: line-through;' ] );

                }

              tag_shut( 'td' );

              tag_open( 'td' );

                out_text( $video->get_youtube_video_title() );

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->render_external_link( null, [ 'rel ' => 'follow' ] );

              tag_shut( 'td' );

              tag_open( 'td' );

                $url = $video->get_segment()->get_blog_url();

                $url->render_external_link( $url->get_domain(), [ 'rel ' => 'follow' ] );

              tag_shut( 'td' );

              tag_open( 'td' );

                out_html( $video->get_segment()->get_sponsor_list_html( null, [ 'rel' => 'follow' ] ) );

              tag_shut( 'td' );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

  render_foot();

}
