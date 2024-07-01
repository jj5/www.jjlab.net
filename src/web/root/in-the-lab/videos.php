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

      tag_text( 'h2', 'Videos' );

      tag_open( 'table', [ 'class' => 'sortable' ] );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_text( 'th', '#' );
            tag_text( 'th', 'Date' );
            tag_text( 'th', 'Channel' );
            tag_text( 'th', 'Show' );
            tag_text( 'th', 'Feature' );
            tag_text( 'th', 'Video' );
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

            tag_open( 'tr' );

              tag_text( 'td', $number++ );
              tag_text( 'td', $video->get_publication_date(), [ 'class' => 'right' ] );

              tag_open( 'td' );

                $video->get_channel()->render_internal_link();

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->get_show_type()->render_internal_link();

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->get_feature()->render_internal_link();

              tag_shut( 'td' );

              tag_open( 'td' );

                $video->render_internal_link();

              tag_shut( 'td' );

              tag_open( 'td' );

                if ( $video->get_show_type()->get_slug() === ShowEnum::MainShow->value ) {

                  $video->get_show()->get_silly_job_title()->render();

                }
                else {

                  $video->get_show()->get_silly_job_title()->render( null, [ 'style' => 'text-decoration: line-through;' ] );

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

                out_html( $video->get_segment()->get_sponsor_list_html() );

              tag_shut( 'td' );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'section' );

  render_foot();

}
