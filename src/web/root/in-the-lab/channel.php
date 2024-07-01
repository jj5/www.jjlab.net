<?php

require_once __DIR__ . '/../../../../inc/framework.php';

global $g_video_id;

function render() {

  global $g_video_id;

  $g_video_id = false;

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? '';

  $path_parts = explode( '/', $path_info );

  if ( count( $path_parts ) > 2 ) {

    if ( isset( $_GET[ 'from' ] ) ) {

      // 2024-07-02 jj5 - NOTE: if we land here we have a video id in the URL path and in the query string. The one in
      // the query string is the one we want to keep, so we'll fix up the path and redirect.

      $g_video_id = $_GET[ 'from' ];

      return redirect_to_video( $g_video_id );

    }
    else {

      $g_video_id = $path_parts[ 2 ];

      // 2024-07-02 jj5 - NOTE: if we land here we're supposed to be showing a particular video, so if we're on the
      // channel.php page (or anything but series.php) we'll redirect to the series.php page.

      $script_name = basename( $_SERVER[ 'SCRIPT_NAME' ] );

      if ( $script_name !== 'series.php' ) {

        return redirect_to_video( $g_video_id );

      }

      // 2024-07-02 jj5 - NOTE: if we land here the video id is in the URL path but we put it into $_GET for back compat.

      $_GET[ 'from' ] = $g_video_id;

    }
  }

  $channel = $path_parts[ 1 ] ?? '';

  switch ( $channel ) {

    case '' :

      return render_channel_index();

    case '@InTheLabWithJayJay' :

      return render_channel_one();

    case '@ElliotsExtras' :

      return render_channel_two();

    default :

      default_redirect( url_base() . '/channel.php' );

  }
}

function redirect_to_video( $video_id ) {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? '';

  $path_parts = explode( '/', $path_info );

  unset( $_GET[ 'from' ] );

  $path_parts[ 2 ] = $video_id;

  $script_name = url_base() . '/series.php';

  $query_string = $_GET ? '?' . http_build_query( $_GET ) : '';

  $new_url = $script_name . implode( '/', $path_parts ) . $query_string;

  return http_redirect( $new_url, 301 );

}


function render_channel_index() {

  render_head( 'YouTube Channels' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'YouTube Channels' );

        tag_text( 'p', 'In The Lab With Jay Jay is published across two YouTube channels.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_channel_one_main();

    render_channel_two_main();

  render_foot();

}

function render_channel_one() {

  global $g_video_id;

  render_head( 'Main Channel' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        if ( $g_video_id ) {

          render_series_info();

        }
        else {

          tag_text( 'h1', 'Main Channel' );

          tag_open( 'p' );

            out_text( 'The main YouTube channel is: ' );

            tag_text(
              'a',
              'youtube.com/@InTheLabWithJayJay',
              [
                'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
                'class' => 'external',
                'title' => TITLE_YOUTUBE_MAIN,
                'target' => '_blank',
              ]
            );

            //out_text( '.' );

          tag_shut( 'p' );

        }

      tag_shut( 'section' );

    tag_shut( 'header' );

    if ( ! $g_video_id ) {

      render_channel_one_main();

    }

    $channel = app_stash()->get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

    $channel->get_thing_list()->render();

  render_foot();

}

function render_channel_one_main() {

  tag_open( 'section', [ 'class' => 'container' ] );

    tag_text( 'h2', 'Main Channel: @InTheLabWithJayJay' );

    tag_open( 'p' );

      out_text( 'The ' );
      
      tag_text(
        'a',
        'main channel',
        [
          'href' => url_base() . '/channel.php/@InTheLabWithJayJay',
          'class' => 'internal',
          'title' => TITLE_CHANNEL_MAIN,
        ]
      );
      
      out_text( ' is known as ' );
      
      tag_text( 'b', '@InTheLabWithJayJay' );

      out_text( ' and is on YouTube here:' );

    tag_shut( 'p' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      tag_text(
        'a',
        'youtube.com/@InTheLabWithJayJay',
        [
          'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
          'class' => 'external youtube',
          'title' => TITLE_YOUTUBE_MAIN,
          'target' => '_blank',
        ]
      );

    tag_shut( 'p' );

    tag_text( 'p', 'I guess the other thing that people might search for is "In The Lab With JJ", so let\'s include that here for the search engines. :)' );

    tag_text( 'p', 'There are some regular shows/features which are published on the main channel:' );

    render_main_channel_shows();

  tag_shut( 'section' );

}

function render_channel_two() {

  global $g_video_id;

  render_head( "2nd Channel" );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        if ( $g_video_id ) {

          render_series_info();

        }
        else {

          tag_text( 'h1', "2nd Channel" );

          tag_open( 'p' );

            out_text( 'The second YouTube channel is: ' );

            tag_text(
              'a',
              'youtube.com/@ElliotsExtras',
              [
                'href' => 'https://www.youtube.com/@ElliotsExtras',
                'class' => 'external',
                'title' => TITLE_YOUTUBE_EXTRA,
                'target' => '_blank',
              ]
            );

            //out_text( '.' );

          tag_shut( 'p' );

        }

      tag_shut( 'section' );

    tag_shut( 'header' );

    if ( ! $g_video_id ) {

      render_channel_two_main();

    }

    $channel = app_stash()->get_item_by_slug( Channel::class, '@ElliotsExtras' );

    $channel->get_thing_list()->render();

  render_foot();

}

function render_channel_two_main() {

  tag_open( 'section', [ 'class' => 'container' ] );

    tag_text( 'h2', '2nd Channel: @ElliotsExtras' );

    tag_open( 'p' );

      out_text( 'There is also a ' );
      
      tag_text(
        'a',
        '2nd channel',
        [
          'href' => url_base() . '/channel.php/@ElliotsExtras',
          'class' => 'internal',
          'title' => TITLE_CHANNEL_EXTRA,
        ]
      );
      
      out_text( ' known as ' );
      
      tag_text( 'b', '@ElliotsExtras' );

      out_text( ' for content which has received less editing attention:' );

    tag_shut( 'p' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      tag_text(
        'a',
        'youtube.com/@ElliotsExtras',
        [
          'href' => 'https://www.youtube.com/@ElliotsExtras',
          'class' => 'external youtube',
          'title' => TITLE_YOUTUBE_EXTRA,
          'target' => '_blank',
        ]
      );

    tag_shut( 'p' );

    tag_text( 'p', 'This is the structure of the content published to the 2nd channel:' );

    render_extra_channel_shows();

  tag_shut( 'section' );

}

function render_channel_shows( $channel ) {

  $show_list = $channel->get_show_list();

  tag_open( 'ul' );

    foreach ( $show_list as $show ) {

      tag_open( 'li' );

        tag_text(
          'a',
          $show->get_title(),
          [
            'href' => url_base() . '/show.php/' . $show->get_slug(),
            'class' => 'internal',
            'title' => $show->get_title(),
          ]
        );

        if ( $show->video_count() === 1 ) {

          out_text( ' (' . $show->video_count() . ' video)' );

        }
        else {

          out_text( ' (' . $show->video_count() . ' videos)' );

        }

        tag_open( 'ul' );

          $feature_list = $show->get_feature_list();

          foreach ( $feature_list as $feature ) {

            if ( $feature->video_count() === 0 ) { continue; }

            tag_open( 'li' );

              tag_text(
                'a',
                $feature->get_title(),
                [
                  'href' => url_base() . '/feature.php/' . $feature->get_slug(),
                  'class' => 'internal',
                  'title' => $feature->get_title(),
                ]
              );

              if ( $feature->video_count() === 1 ) {

                out_text( ' (' . $feature->video_count() . ' video)' );

              }
              else {

                out_text( ' (' . $feature->video_count() . ' videos)' );

              }

            tag_shut( 'li' );

          }

        tag_shut( 'ul' );

      tag_shut( 'li' );

    }

  tag_shut( 'ul' );

}

function render_main_channel_shows() {

  $channel = app_stash()->get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

  render_channel_shows( $channel );

}

function render_extra_channel_shows() {

  $channel = app_stash()->get_item_by_slug( Channel::class, '@ElliotsExtras' );

  render_channel_shows( $channel );

}

function render_video_header() {

  global $g_video_id;

  $video = app_stash()->get_item_by_slug( YoutubeVideo::class, $g_video_id );

  if ( $video->is_null() ) { return; }

  tag_text( 'h1', $video->get_title() );

  tag_text( 'p', "Thanks for watching, and don't forget to like and subscribe!" );

}

function render_series_info() {

  global $g_video_id;

  $video = app_stash()->get_item_by_slug( YoutubeVideo::class, $g_video_id );

  if ( $video->is_null() ) { return; }

  $series = $video->get_series();
  $video_list = $series->get_live_video_list();

  if ( count( $video_list ) === 0 ) { return; }

  assert( $video === $video_list[ 0 ] );

  $publication_date = $video->get_publication_date();

  tag_text( 'h1', $video->get_title() );

  if ( count( $video_list ) > 1 ) {

    tag_open( 'p' );

      out_text( 'This show was published to ' );

      $video->get_channel()->render_internal_link();

      out_text( ' and includes these features:' );

    tag_shut( 'p' );

    tag_open( 'ul' );

      foreach ( $video_list as $video ) {

        $title = 'This video was published on ' . $publication_date->format_for_user() . ' and is ' . $video->get_duration()->to_string() . ' long.';

        tag_open( 'li', [ 'title' => $title ] );

          $feature = $video->get_feature();

          //$feature->render_internal_link();

          out_text( $feature->get_name() . ': ' );

          tag_text(
            'a',
            $video->get_title(),
            [
              'href' => $video->get_internal_url(),
              'class' => 'internal',
              'title' => $video->get_title(),
            ]
          );

          out_text( ' [' . $video->get_duration()->to_string() . ']' );

        tag_shut( 'li' );

      }

    tag_shut( 'ul' );

  }
  else {

    tag_open( 'p' );

      out_text( 'This show was published to ' );

      $video->get_channel()->render_internal_link();

      out_text( ' on ' );

      tag_text(
        'time',
        $publication_date->format_for_user(),
        [
          'datetime' => $publication_date->format_for_web(),
        ]
      );

      $duration = $video->get_duration();

      out_text( ' and is ' );

      tag_text( 'span', $duration->to_string() );

      out_text( ' long.' );

    tag_shut( 'p' );

  }

  tag_text( 'p', "Thanks for watching, and don't forget to like and subscribe!" );

}
