<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_show_index();

    case '/main-show' :

      return render_show_main();

    case '/main' :

      return http_redirect( url_base() . '/show.php/main-show', 301 );

    case '/special-show' :

      return render_show_special();

    case '/special' :

      return http_redirect( url_base() . '/show.php/special-show', 301 );

    case '/extra-show' :

      return render_show_extra();

    case '/extra' :

      return http_redirect( url_base() . '/show.php/extra-show', 301 );

    case '/electronics-project' :
    case '/old-book' :
    case '/old-book-teardown' :
    case '/channel-news' :
    case '/interlude' :
    case '/unboxing' :
    case '/maxitronix' :
    case '/maxitronix-10in1' :
    case '/maxitronix-20in1' :
    case '/maxitronix-30in1' :
    case '/maxitronix-59in1' :
    case '/maxitronix-60in1' :
    case '/maxitronix-130in1' :
    case '/maxitronix-200in1' :
    case '/maxitronix-300in1' :
    case '/maxitronix-500in1' :
    case '/mini-project' :
    case '/new-book' :
    case '/new-book-teardown' :
    case '/early-content' :
    case '/extra-content' :

      return http_redirect( url_base() . '/feature.php' . $path_info, 301 );

    default :

      default_redirect( url_base() . '/show.php' );

  }
}

function render_show_index() {

  render_head( 'Shows' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Shows' );

        tag_text( 'p', 'In The Lab With Jay Jay is comprised of a few different types of shows.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

      tag_text( 'h2', 'List of Shows' );

      tag_open( 'ul' );

        $channel_list = get_list( Channel::class );

        foreach ( $channel_list as $channel ) {

          render_channel_shows( $channel );

        }

      tag_shut( 'ul' );

    tag_shut( 'section' );

  render_foot();

}

function render_channel_shows( $channel ) {

  $show_list = $channel->get_show_list();

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

    tag_shut( 'li' );

  }
}

function render_show_features( $show ) {

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
}


function render_show_main() {

  $show = app_stash()->get_item_by_slug( Show::class, 'main-show' );

  render_head( 'Main Show' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Main Show' );

        tag_text(
          'p',
          'The main show is for high quality video content of interest to electronics hobbyists.',
        );


      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

      tag_text( 'h2', 'Main Show' );

      tag_open( 'p' );

        out_text( 'The main show airs on the ' );

        tag_text(
          'a',
          'main channel',
          [
            'href' => url_base() . '/channel.php/@InTheLabWithJayJay',
            'class' => 'internal channel',
            'title' => TITLE_CHANNEL_MAIN,
          ]
        );

        out_text( ' and includes these regular features:' );

      tag_shut( 'p' );

      render_show_features( $show );

    tag_shut( 'section' );

    $show->get_thing_list()->render();

  render_foot();

}


function render_show_special() {

  $show = app_stash()->get_item_by_slug( Show::class, 'special-show' );

  render_head( 'Special Shows' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Special Shows' );

        tag_open( 'p' );

          out_text( 'Special shows air on the ' );

          tag_text(
            'a',
            'main channel',
            [
              'href' => url_base() . '/channel.php/@InTheLabWithJayJay',
              'class' => 'internal channel',
              'title' => TITLE_CHANNEL_MAIN,
            ]
          );

          out_text( ' in addition to the ' );

          tag_text(
            'a',
            'main show',
            [
              'href' => url_base() . '/show.php/main-show',
              'class' => 'internal channel',
              'title' => TITLE_SHOW_MAIN,
            ]
          );

          out_text( '.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

      tag_text( 'h2', 'Show Features' );

      tag_open( 'p' );

        out_text( 'The special shows air on the ' );

        tag_text(
          'a',
          'main channel',
          [
            'href' => url_base() . '/channel.php/@InTheLabWithJayJay',
            'class' => 'internal channel',
            'title' => TITLE_CHANNEL_MAIN,
          ]
        );

        out_text( ' and include these semi-regular features:' );

      tag_shut( 'p' );

      render_show_features( $show );

    tag_shut( 'section' );

    $show->get_thing_list()->render();

  render_foot();

}

function render_show_extra() {

  render_head( 'Extra Shows' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Extra Shows' );

        tag_open( 'p' );

          out_text( 'Extra shows are for ' );

          tag_text(
            'a',
            'extra content',
            [
              'href' => url_base() . '/feature.php/extra-content',
              'class' => 'internal',
              'title' => TITLE_FEATURE_EXTRA,
            ]
          );

          out_text( ' which airs on the ' );

          tag_text(
            'a',
            '2nd channel',
            [
              'href' => url_base() . '/channel.php/@ElliotsExtras',
              'class' => 'internal channel',
              'title' => TITLE_CHANNEL_EXTRA,
            ]
          );

          out_text( '.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    $show = app_stash()->get_item_by_slug( Show::class, 'extra-show' );

    $show->get_thing_list()->render();

  render_foot();

}
