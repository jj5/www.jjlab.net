<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_show_type_index();

    case '/main-show' :

      return render_show_type_main();

    case '/main' :

      return http_redirect( url_base() . '/show-type.php/main-show', 301 );

    case '/special-show' :

      return render_show_type_special();

    case '/special' :

      return http_redirect( url_base() . '/show-type.php/special-show', 301 );

    case '/extra-show' :

      return render_show_type_extra();

    case '/extra' :

      return http_redirect( url_base() . '/show-type.php/extra-show', 301 );

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

      default_redirect( url_base() . '/show-type.php' );

  }
}

function render_show_type_index() {

  render_head( 'Shows' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Shows' );

        tag_text( 'p', 'In The Lab With Jay Jay is comprised of a few different types of shows.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      tag_text( 'h2', 'List of Shows', [ 'id' => 'shows' ] );

      tag_open( 'ul' );

        $channel_list = get_list( Channel::class );

        foreach ( $channel_list as $channel ) {

          render_channel_shows( $channel );

        }

      tag_shut( 'ul' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}

function render_channel_shows( $channel ) {

  $show_type_list = $channel->get_show_type_list();

  foreach ( $show_type_list as $show_type ) {

    tag_open( 'li' );

      tag_text(
        'a',
        $show_type->get_title(),
        [
          'href' => url_base() . '/show-type.php/' . $show_type->get_slug(),
          'class' => 'internal',
          'title' => $show_type->get_title(),
        ]
      );

      render_video_stats( $show_type->get_video_count(), $show_type->get_total_hours() );

    tag_shut( 'li' );

  }
}

function render_show_type_features( $show_type ) {

  $feature_list = $show_type->get_feature_list();

  foreach ( $feature_list as $feature ) {

    if ( $feature->get_video_count() === 0 ) { continue; }

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

      render_video_stats( $feature->get_video_count(), $feature->get_total_hours() );

    tag_shut( 'li' );

  }
}


function render_show_type_main() {

  $show_type = app_stash()->get_item_by_slug( ShowType::class, ShowEnum::MainShow->value );

  render_head( 'Main Show' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Main Show', [ 'id' => 'heading' ] );

        tag_text(
          'p',
          'The main show is for high quality video content of interest to electronics hobbyists.',
        );


      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      tag_text( 'h2', 'Main Show', [ 'id' => 'main-show' ] );

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

      render_show_type_features( $show_type );

    tag_shut( 'section' );

    $show_type->get_thing_list()->render();

    render_section_about_next();

  render_foot();

}


function render_show_type_special() {

  $show_type = app_stash()->get_item_by_slug( ShowType::class, ShowEnum::SpecialShow->value );

  render_head( 'Special Shows' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

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
              'href' => url_base() . '/show-type.php/main-show',
              'class' => 'internal channel',
              'title' => TITLE_SHOW_MAIN,
            ]
          );

          out_text( '.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section' );

      tag_text( 'h2', 'Show Features', [ 'id' => 'features' ] );

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

      render_show_type_features( $show_type );

    tag_shut( 'section' );

    $show_type->get_thing_list()->render();

    render_section_about_next();

  render_foot();

}

function render_show_type_extra() {

  render_head( 'Extra Shows' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

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

    $show_type = app_stash()->get_item_by_slug( ShowType::class, ShowEnum::ExtraShow->value );

    $show_type->get_thing_list()->render();

    render_section_about_next();

  render_foot();

}
