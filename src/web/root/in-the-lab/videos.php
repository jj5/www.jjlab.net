<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  $video_list = array_reverse( get_list( YoutubeVideo::class ) );

  switch ( $path_info ) {

    case '' :

      return render_videos_main( $video_list );


    default :

      default_redirect( url_base() . '/videos.php#videos' );

  }
}

function render_videos_main( $video_list ) {

  render_head( 'Videos' );

    tag_open( 'section', [ 'class' => 'table' ] );

      tag_text( 'h2', 'Videos', [ 'id' => 'videos' ] );

      tag_open( 'p' );

        out_text( "This page is " );

        render_link_internal(
          'secret',
          url_base() . '/secret.php#heading',
          TITLE_SECRET,
        );

        out_text( ". Shhh! It's a list of all the videos I make across both my " );

        render_link_internal(
          'channels',
          url_base() . '/channel.php#heading',
          TITLE_CHANNEL_INDEX,
        );

        out_text( ". " );
        out_text( "It's secret because it's a hack and only looks good on a 4K monitor. It won't work well on a small screen. " );
        out_text( "There is also a " );

        render_link_internal(
          'books index',
          url_base() . '/books.php#heading',
          TITLE_BOOK_INDEX,
        );

        out_text( "." );

      tag_shut( 'p' );

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
            tag_text( 'th', 'Patreon' );
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

                $video->get_channel()->render_link_external();

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->get_show_type()->render_link_external();

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->get_feature()->render_link_external();

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->render_link_external();

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

                $video->render_external_link();

              tag_shut( 'td' );

              tag_open( 'td' );

                $url = $video->get_segment()->get_blog_url();

                $url->render_external_link( $url->get_domain() );

              tag_shut( 'td' );

              tag_open( 'td' );

                $url = $video->get_segment()->get_patreon_url();

                $href  = $url->to_string();

                if ( preg_match( '|[/-](\d+)$|', $href, $matches ) ) {

                  $text = $matches[ 1 ];

                  render_link_external( $text, "$href/edit", 'Click here to edit Patreon announcement.' );

                }

                //$url->render_external_link( $text );

              tag_shut( 'td' );

              tag_open( 'td' );

                out_html( $video->get_segment()->get_sponsor_list_html() );

              tag_shut( 'td' );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
