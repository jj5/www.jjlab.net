<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? '';

  switch ( $path_info ) {

    case '' :

      return render_channel_index();

    case '/@InTheLabWithJayJay' :

      return render_channel_one();

    case '/@ElliotsExtras' :

      return render_channel_two();

    default :

      default_redirect( url_base() . '/channel.php' );

  }
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

  render_head( 'Main Channel' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

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

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_channel_one_main();

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

  render_head( "2nd Channel" );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

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

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_channel_two_main();

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
