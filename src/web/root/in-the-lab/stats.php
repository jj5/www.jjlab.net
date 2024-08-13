<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_stats_main();

    default :

      default_redirect( url_base() . '/stats.php#heading' );

  }
}

function render_stats_main() {

  $title = 'Statistics';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          out_text( "On this page you can find some statistics about my videos and equipment." );

        tag_shut( 'p' );

        render_stats_notes();

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    $videl_list = get_list( Video::class );

    render_stats( 2, 'video-stats', 'All Videos', $videl_list );

    $channel_list = get_list( Channel::class );

    foreach ( $channel_list as $channel ) {

      if ( $channel->get_video_count() === 0 ) { continue; }

      render_stats( 3, $channel->get_slug(), $channel->get_slug(), $channel->get_video_list(), $channel );

      if ( $channel->get_slug() === '@ElliotsExtras' ) {

        // 2024-08-13 jj5 - we don't show the show types or features for Elliot's Extras, there's only one (of each).

        continue;

      }

      $show_type_list = $channel->get_show_type_list();

      foreach ( $show_type_list as $show_type ) {

        if ( $show_type->get_video_count() === 0 ) { continue; }

        render_stats( 4, $show_type->get_slug(), $show_type->get_name(), $show_type->get_video_list(), $show_type );

        $feature_list = $show_type->get_feature_list();

        foreach ( $feature_list as $feature ) {

          if ( $feature->get_video_count() === 0 ) { continue; }

          render_stats( 5, $feature->get_slug(), $feature->get_name(), $feature->get_video_list(), $feature );

        }
      }
    }

    // 2024-07-12 jj5 - TODO: output equipment stats

    render_section_about_next();

  render_foot();

}

function render_stats( int $heading_level, string $id, string $heading, array $video_list, $thing = null ) {

  tag_open( 'section' );

    tag_text( "h{$heading_level}", $heading, [ 'id' => $id ] );

    tag_open( 'p' );

      out_text( 'These are the video stats for ' );

      if ( $thing ) {

        $thing->render_link_internal();

      }
      else {

        out_text( 'all' );

      }

      out_text( ' videos.' );

    tag_shut( 'p' );

    $duration_list = [];

    foreach ( $video_list as $video ) {

      $duration = $video->get_duration();

      if ( $duration->is_null() ) { continue; }

      $interval = $duration->get_value();

      if ( $interval === null ) { continue; }

      $duration_list[] = date_interval_to_seconds( $interval );

    }

    $stats = mud_get_stats( $duration_list, MUD_STATS_TYPE_FLOAT );

    tag_open( 'table' );

      tag_open( 'tbody' );

        render_stats_rows( $stats );

      tag_shut( 'tbody' );

    tag_shut( 'table' );

  tag_shut( 'section' );

}
