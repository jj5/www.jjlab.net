<?php

require_once __DIR__ . '/../../../../run/run-web.php';

global $g_video_id;

function app_render() {

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
      // channel.php page (or anything but show.php) we'll redirect to the show.php page.

      $script_name = basename( $_SERVER[ 'SCRIPT_NAME' ] );

      if ( $script_name !== 'show.php' ) {

        return redirect_to_video( $g_video_id );

      }

      // 2024-08-20 jj5 - if we replace videos we can record that here...
      //
      global $g_old_video_map;

      foreach ( $g_old_video_map as $from => $to ) {

        if ( $g_video_id === $from ) {

          return redirect_to_video( $to );

        }
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

      return default_redirect( url_base() . '/channel.php#heading' );

  }
}

function redirect_to_video( $video_id ) {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? '';

  $path_parts = explode( '/', $path_info );

  unset( $_GET[ 'from' ] );

  $path_parts[ 2 ] = $video_id;

  $script_name = url_base() . '/show.php';

  $query_string = $_GET ? '?' . http_build_query( $_GET ) : '';

  // 2024-08-20 jj5 - NEW:
  $new_url = $script_name . implode( '/', $path_parts ) . $query_string . '#' . $video_id;
  // 2024-08-20 jj5 - OLD:
  //$new_url = $script_name . implode( '/', $path_parts ) . $query_string . '#heading';

  return http_redirect( $new_url, 301 );

}


function render_channel_index() {

  render_head( 'YouTube Channels' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'YouTube Channels' );

        tag_text( 'p', 'In The Lab With Jay Jay is published across two YouTube channels.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_channel_one_main();

    render_channel_two_main();

    render_section_about_next();

  render_foot();

}

function render_channel_one() {

  global $g_video_id;

  if ( $g_video_id ) {

    $video = app_stash()->get_item_by_slug( YoutubeVideo::class, $g_video_id );

    $title = $video->get_title();

  }
  else {

    $title = 'Main Channel: @InTheLabWithJayJay';

  }

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        if ( $g_video_id ) {

          render_show_info();

        }
        else {

          tag_text( 'h1', $title, [ 'id' => 'heading' ] );

          tag_open( 'p' );

            out_text( 'The main YouTube channel is: ' );

            render_link_external(
              'youtube.com/@InTheLabWithJayJay',
              'https://www.youtube.com/@InTheLabWithJayJay',
              TITLE_YOUTUBE_MAIN,
            );

          tag_shut( 'p' );

        }

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    if ( ! $g_video_id ) {

      render_channel_one_main();

    }

    $channel = app_stash()->get_item_by_slug( Channel::class, '@InTheLabWithJayJay' );

    if ( $g_video_id ) {

      $video = app_stash()->get_item_by_slug( YoutubeVideo::class, $g_video_id );

      $show = $video->get_show();
      $video_list = $show->get_live_video_list();

      // 2024-08-12 jj5 - HACK!
      //
      $next_show = $show;

      $thing_list = new ThingList( [ $show ], $next_show );

    }
    else {

      $video_list = $channel->get_video_list();
      $thing_list = $channel->get_thing_list();

    }

    render_section_about_stats( 2, $video_list );

    $thing_list->render();

    render_section_about_next();

  render_foot();

}

function render_channel_one_main() {

  tag_open( 'section' );

    tag_text( 'h2', 'Main Channel: @InTheLabWithJayJay', [ 'id' => '@InTheLabWithJayJay' ] );

    tag_open( 'p' );

      out_text( 'The ' );

      render_link_internal(
        'main channel',
        url_base() . '/channel.php/@InTheLabWithJayJay#heading',
        TITLE_CHANNEL_MAIN,
      );

      out_text( ' is known as ' );

      tag_text( 'b', '@InTheLabWithJayJay' );

      out_text( ' and is on YouTube here:' );

    tag_shut( 'p' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      render_link_external(
        'youtube.com/@InTheLabWithJayJay',
        'https://www.youtube.com/@InTheLabWithJayJay',
        TITLE_YOUTUBE_MAIN,
      );

    tag_shut( 'p' );

    tag_text( 'p', 'I guess the other thing that people might search for is "In The Lab With JJ", so let\'s include that here for the search engines. :)' );

    tag_text( 'p', 'There are some regular shows/features which are published on the main channel:' );

    render_main_channel_shows();

  tag_shut( 'section' );

}

function render_channel_two() {

  global $g_video_id;

  $title = '2nd Channel: @ElliotsExtras';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        if ( $g_video_id ) {

          render_show_info();

        }
        else {

          tag_text( 'h1', $title );

          tag_open( 'p' );

            out_text( 'The second YouTube channel is: ' );

            render_link_external(
              'youtube.com/@ElliotsExtras',
              'https://www.youtube.com/@ElliotsExtras',
              TITLE_YOUTUBE_EXTRA,
            );

          tag_shut( 'p' );

        }

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    if ( ! $g_video_id ) {

      render_channel_two_main();

    }

    $channel = app_stash()->get_item_by_slug( Channel::class, '@ElliotsExtras' );

    render_section_about_stats( 2, $channel->get_video_list() );

    $channel->get_thing_list()->render();

    render_section_about_next();

  render_foot();

}

function render_channel_two_main() {

  tag_open( 'section' );

    tag_text( 'h2', '2nd Channel: @ElliotsExtras', [ 'id' => '@ElliotsExtras' ] );

    tag_open( 'p' );

      out_text( 'There is also a ' );

      render_link_internal(
        '2nd channel',
        url_base() . '/channel.php/@ElliotsExtras#heading',
        TITLE_CHANNEL_EXTRA,
      );

      out_text( ' known as ' );

      tag_text( 'b', '@ElliotsExtras' );

      out_text( ' for content which has received less editing attention:' );

    tag_shut( 'p' );

    tag_open( 'p', [ 'class' => 'indent' ] );

      render_link_external(
        'youtube.com/@ElliotsExtras',
        'https://www.youtube.com/@ElliotsExtras',
        TITLE_YOUTUBE_EXTRA,
      );

    tag_shut( 'p' );

    tag_text( 'p', 'This is the structure of the content published to the 2nd channel:' );

    render_extra_channel_shows();

  tag_shut( 'section' );

}

function render_channel_shows( $channel ) {

  $show_type_list = $channel->get_show_type_list();

  tag_open( 'ul' );

    foreach ( $show_type_list as $show_type ) {

      tag_open( 'li' );

        render_link_internal(
          $show_type->get_title(),
          url_base() . '/show-type.php/' . $show_type->get_slug() . '#heading',
          $show_type->get_title(),
        );

        render_video_stats( $show_type->get_video_count(), $show_type->get_total_hours() );

        tag_open( 'ul' );

          $feature_list = $show_type->get_feature_list();

          foreach ( $feature_list as $feature ) {

            if ( $feature->get_video_count() === 0 ) { continue; }

            tag_open( 'li' );

              render_link_internal(
                $feature->get_title(),
                url_base() . '/feature.php/' . $feature->get_slug() . '#heading',
                $feature->get_title(),
              );

              render_video_stats( $feature->get_video_count(), $feature->get_total_hours() );

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

  tag_text( 'p', TAGLINE_THANKS );

}

function render_show_info() {

  global $g_video_id;

  $video = app_stash()->get_item_by_slug( YoutubeVideo::class, $g_video_id );

  if ( $video->is_null() ) { return; }

  $show = $video->get_show();
  $video_list = $show->get_live_video_list();

  if ( count( $video_list ) === 0 ) { return; }

  //assert( $video === $video_list[ 0 ] );

  $publication_date = $video->get_publication_date();
  $show_type = $video->get_show_type();

  tag_text( 'h1', $video->get_title() );

  if ( count( $video_list ) > 1 ) {

    tag_open( 'p' );

      out_text( 'This ' );

      $show_type->render_link_internal( strtolower( $show_type->get_name() ) );

      out_text( ' was published to ' );

      $video->get_channel()->render_link_internal();

      out_text( ' and includes these features:' );

    tag_shut( 'p' );

    tag_open( 'div', [ 'style' => 'text-align:center' ] );

      tag_open( 'table', [ 'style' => 'display:inline-block' ] );

        tag_open( 'thead' );

          tag_open( 'tr' );

            tag_open( 'th' );

              out_text( 'Feature' );

            tag_shut( 'th' );

            tag_open( 'th' );

              out_text( 'Title' );

            tag_shut( 'th' );

            tag_open( 'th' );

              out_text( 'Duration' );

            tag_shut( 'th' );

          tag_shut( 'tr' );

        tag_shut( 'thead' );

        tag_open( 'tbody' );

          foreach ( $video_list as $video ) {

            $title =
              'This video was published on ' .
              $publication_date->format_for_user() .
              ' and is ' .
              $video->get_duration()->to_string() .
              ' long.';

            tag_open( 'tr', [ 'title' => $title ] );

              tag_open( 'td', [ 'style' => 'text-align:right' ] );

                $feature = $video->get_feature();

                out_text( $feature->get_name() . ': ' );

              tag_shut( 'td' );

              tag_open( 'td' );

                render_link_internal(
                  $video->get_title(),
                  $video->get_internal_url(),
                  $video->get_title(),
                );

              tag_shut( 'td' );

              tag_open( 'td', [ 'style' => 'text-align:right' ] );

                out_text( $video->get_duration()->to_string() );

              tag_shut( 'td' );

            tag_shut( 'tr' );

          }

        tag_shut( 'tbody' );

      tag_shut( 'table' );

    tag_shut( 'div' );

  }
  else {

    tag_open( 'p' );

      out_text( 'This ' );

      $show_type->render_link_internal( strtolower( $show_type->get_name() ) );

      out_text( ' was published to ' );

      $video->get_channel()->render_link_internal();

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

  tag_text( 'p', TAGLINE_THANKS );

}
