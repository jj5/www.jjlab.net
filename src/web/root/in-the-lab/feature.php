<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? '';

  switch ( $path_info ) {

    case '' :

      return render_feature_index();

    case '/mini-project' :

      return render_feature_mini_project();

    case '/old-book' :

      return http_redirect( url_base() . '/feature.php/old-book-teardown#heading', 301 );

    case '/new-book' :

      return http_redirect( url_base() . '/feature.php/new-book-teardown#heading', 301 );

  }

  $feature_slug = ltrim( $path_info, '/' );

  $feature = app_stash()->get_item_by_slug( Feature::class, $feature_slug );

  if ( ! $feature->is_null() ) {

    return render_feature_generic( $feature );

  }

  $path_parts = explode( '-', $path_info );

  switch ( $path_parts[ 0 ] ) {

    case '/maxitronix' :

      if ( count( $path_parts ) === 1 ) {

        return render_feature_maxitronix_index();

      }

      $kit = implode( '-', array_slice( $path_parts, 1 ) );

      return render_feature_maxitronix_kit( $kit );

  }

  default_redirect( url_base() . '/feature.php#heading' );

}

function render_feature_index() {

  render_head( 'Features' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Features' );

        tag_text( 'p', 'There are a bunch of regular features on the various shows.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'List of Features', [ 'id' => 'features' ] );

      tag_open( 'p' );

        out_text( 'Here is a list of the features you will see on the ' );

        render_link_internal( 'shows', url_base() . '/show-type.php#heading', TITLE_SHOW_TYPE_INDEX );

        out_text( ':' );

      tag_shut( 'p' );

      tag_open( 'ul' );

        $list = get_list( Feature::class );

        foreach ( $list as $feature ) {

          $video_count = $feature->get_video_count();

          if ( $video_count === 0 ) { continue; }

          tag_open( 'li' );

            $feature->render_link_internal();

            render_video_stats( $feature->get_video_count(), $feature->get_total_hours() );

          tag_shut( 'li' );

        }

      tag_shut( 'ul' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}

function render_feature_generic( $feature ) {

  $title = $feature->get_title() . ' Videos';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          $feature_title = strtolower( $feature->get_title() );
          $show_title = strtolower( $feature->get_show_type()->get_title() );

          if ( strpos( $feature_title, 'maxitronix' ) === 0 ) {

            $feature_title = $feature->get_title();

          }

          switch ( $feature->get_show_type()->get_slug() ) {

            case ShowEnum::MainShow->value :

              out_text( 'The ' );

              $feature->render_link_internal( $feature_title );

              out_text( ' is a regular feature of the ' );

              $feature->get_show_type()->render_link_internal( $show_title );

              out_text( ' which airs on ' );

              $feature->get_channel()->render_link_internal();

              out_text( '.' );

              break;

            case ShowEnum::SpecialShow->value :

              out_text( 'The ' );

              $feature->render_link_internal( $feature_title );

              out_text( ' is one of the ' );

              $feature->get_show_type()->render_link_internal( $show_title );

              out_text( ' features which airs occasionally on ' );

              $feature->get_channel()->render_link_internal();

              out_text( '.' );

              break;

            default :

              out_text( 'The ' );

              $feature->render_link_internal( $feature_title );

              out_text( ' is a ' );

              $feature->get_show_type()->render_link_internal( $show_title );

              out_text( ' feature which airs occasionally on ' );

              $feature->get_channel()->render_link_internal();

              out_text( '.' );

              break;

          }

        tag_shut( 'p' );

        tag_text( 'p', strval( $feature->get_feature_text() ) );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_section_about_stats( 2, $feature->get_video_list() );

    //app_stash()->get_main_show_selection()->render();

    $feature->get_thing_list()->render();

    render_section_about_next();

  render_foot();

}

function render_book_feature_text() {

  tag_text(
    'p',
    'In a book teardown I go in detail through the table of contents and have a look at some of the front and back ' .
    'matter. I also have a look at the index and the bibliography. I try to give you a good idea of what the book is ' .
    'about and what you can expect to find in it.'

  );

}

function render_feature_maxitronix_index() {

  render_head( 'Maxitronix Xin1 Kits' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Maxitronix Xin1 Kits' );

        tag_text(
          'p',
          'In the Maxitronix Xin1 videos I work my way through some old electronics project labs distributed ' .
            'by Maxitronix back in the good old days.'
        );

        tag_open( 'p' );

          out_text( 'The Maxitronix Xin1 videos are ' );

          render_link_internal(
            'special shows',
            url_base() . '/show-type.php/special-show#heading',
            TITLE_SHOW_SPECIAL,
          );

          out_text( ' which air on the ' );

          render_link_internal(
            'main channel',
            url_base() . '/channel.php/@InTheLabWithJayJay#heading',
            TITLE_CHANNEL_MAIN,
          );

          out_text( '.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_section_about_maxitronix_kits();

    tag_open( 'section' );

      tag_text( 'h2', 'Format of an Xin1 Project Video', [ 'id' => 'format' ] );

      tag_open( 'p' );

        out_text( 'In an Xin1 project video I have the following sections:' );

      tag_shut( 'p' );

      tag_open( 'ul' );

        tag_open( 'li' );

          out_text( 'welcome and introduction (welcome cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'read instructions (book cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'LTspice build and simulation (computer)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'kit construction (booth cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'kit test and measure with oscilloscope (bench cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'kit thermal examination (bench cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'KiCad PCB design (computer)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'PCBWay PCB order (computer)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'PCB build (bench cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'PCB test and measure with oscilloscope (bench cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'PCB thermal examination (bench cam)' );

        tag_shut( 'li' );

        tag_open( 'li' );

          out_text( 'conclusion (farewell cam)' );

        tag_shut( 'li' );

      tag_shut( 'ul' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h2', 'Announcing Maxitronix Xin1 Projects Feature', [ 'id' => 'announcement' ] );

      tag_text( 'p', 'In this video I announce the Maxitronix Xin1 projects feature.' );

      render_youtube_iframe( 'uEzp4mx_pYA', 'center' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}

function render_feature_maxitronix_kit( $kit ) {

  render_head( "Maxitronix $kit Kit" );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Maxitronix $kit Kit" );

        tag_open( 'p' );

          out_text( "In this Maxitronix $kit Kit special feature on the " );

          render_link_internal(
            'main channel',
            url_base() . '/channel.php/@InTheLabWithJayJay#heading',
            TITLE_CHANNEL_MAIN,
          );

          out_text( " I work my way through the projects in this old electronics " .
              "project lab distributed by Maxitronix back in the good old days. When we finish this one we'll move on " .
              "to the "
          );

          render_link_internal(
            'next one',
            url_base() . '/show-type.php/maxitronix#heading',
            TITLE_SHOW_MAXITRONIX,
          );

          out_text( '!' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    app_stash()->get_maxitronix_kit_selection( $kit )->render();

    render_section_about_next();

  render_foot();

}

function render_feature_mini_project() {

  $feature = app_stash()->get_item_by_slug( Feature::class, 'mini-project' );

  render_head( 'Mini Projects' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Mini Projects' );

        tag_open( 'p' );

          out_text( 'Mini Projects are ' );

          render_link_internal(
            'special shows',
            url_base() . '/show-type.php/special-show#heading',
            TITLE_SHOW_SPECIAL,
          );

          out_text( ' which air on the ' );

          render_link_internal(
            'main channel',
            url_base() . '/channel.php/@InTheLabWithJayJay#heading',
            TITLE_CHANNEL_MAIN,
          );

          out_text( '.' );

        tag_shut( 'p' );

        tag_open( 'p' );

          out_text( 'The Mini Projects are published by ' );

          render_link_external(
            'Silicon Chip magazine',
            'https://www.siliconchip.com.au/',
            TITLE_SILICON_CHIP,
          );

          out_text( ' and sponsored by ' );

          render_link_external(
            'Jaycar',
            'https://www.jaycar.com.au/',
            TITLE_JAYCAR,
          );

          out_text( '.' );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Mini Projects', [ 'id' => 'mini-projects' ] );

      tag_open( 'p' );

        out_text( 'Soon we will be covering the Mini Projects from Silicon Chip magazine, sponsored by Jaycar. ' );

        out_text( 'Stand by for those!' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h2', 'Links', [ 'id' => 'links' ] );

      tag_open( 'p' );

        out_text( 'Here are some links regarding the new Mini Projects special shows:' );

      tag_shut( 'p' );

      tag_open( 'ul' );

        tag_open( 'li' );

          render_link_external(
            'Channel News: Announcing Mini Projects | In The Lab With Jay Jay',
            'https://blog.jj5.net/blog/2024/06/14/channel-news-announcing-mini-projects-in-the-lab-with-jay-jay/',
            TITLE_ANNOUNCEMENT_MINI_PROJECTS,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_external(
            'Our new Mini Projects - May 2024 - Silicon Chip Online',
            'https://www.siliconchip.com.au/Issue/2024/May/Our+new+Mini+Projects',
            TITLE_LINK_SILICON_CHIP_MINI_PROJECTS_ANNOUNCEMENT,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_external(
            'List of Mini Project articles published by Silicon Chip magazine',
            'https://www.siliconchip.com.au/Series/417',
            TITLE_LINK_SILICON_CHIP_MINI_PROJECTS_LIST,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_external(
            'Silicon Chip',
            'https://www.siliconchip.com.au/',
            TITLE_SILICON_CHIP,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_external(
            'Jaycar',
            'https://www.jaycar.com.au/',
            TITLE_JAYCAR,
          );

        tag_shut( 'li' );

      tag_shut( 'ul' );

    tag_shut( 'section' );

    render_section_about_stats( 2, $feature->get_video_list() );

    //app_stash()->get_main_show_selection()->render();

    $feature->get_thing_list()->render();

    render_section_about_next();

  render_foot();

}
