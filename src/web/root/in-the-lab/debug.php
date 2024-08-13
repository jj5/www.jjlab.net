<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  if ( is_prod() ) {

    return render_500();

  }

  //return app_stash()->render();

  render_head( 'Debug' );

    render_debug_menu();

    render_debug_channel_list();

    render_debug_show_list();

    render_debug_feature_list();

  render_foot();

}

function render_debug_menu() {

  tag_open( 'section' );

    tag_text( 'h1', 'Menu' );

      tag_open( 'ul' );

        tag_open( 'li' );

          render_link_internal(
            'Books',
            url_base() . '/books.php#heading',
            TITLE_BOOK_INDEX,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal(
            'Videos',
            url_base() . '/videos.php#heading',
            TITLE_VIDEO_INDEX,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal(
            'YouTube Template',
            url_base() . '/youtube-template.php#heading',
            TITLE_YOUTUBE_TEMPLATE,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal(
            'Blog Template',
            url_base() . '/blog-template.php#heading',
            TITLE_BLOG_TEMPLATE,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal(
            'Feed',
            url_base() . '/feed.php',
            TITLE_RSS_FEED,
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          render_link_internal(
            'Sitemap',
            url_base() . '/sitemap.php#heading',
            TITLE_SITEMAP_XML,
          );

        tag_shut( 'li' );

      tag_shut( 'ul' );


  tag_shut( 'section' );

}

function render_debug_channel_list() {

  tag_open( 'section' );

    tag_text( 'h1', 'Channel List' );

    tag_open( 'ul' );

      tag_open( 'li' );

        render_link_internal(
          'Channel Index',
          url_base() . '/channel.php#heading',
          TITLE_CHANNEL_INDEX,
        );

      tag_shut( 'li' );

      $list = app_stash()->get_list( Channel::class );

      foreach ( $list as $channel ) {

        tag_open( 'li' );

          $channel->render_link_internal();

        tag_shut( 'li');

      }

    tag_shut( 'ul' );

  tag_shut( 'section' );

}

function render_debug_show_list() {

  tag_open( 'section' );

    tag_text( 'h1', 'Show List' );

    tag_open( 'ul' );

      tag_open( 'li' );

        render_link_internal(
          'Show Index',
          url_base() . '/show-type.php#heading',
          TITLE_SHOW_TYPE_INDEX,
        );

      tag_shut( 'li' );

      $list = app_stash()->get_list( ShowType::class );

      foreach ( $list as $show_type ) {

        tag_open( 'li' );

          $show_type->render_link_internal();

        tag_shut( 'li');

      }

    tag_shut( 'ul' );

  tag_shut( 'section' );

}

function render_debug_feature_list() {

  tag_open( 'section' );

    tag_text( 'h1', 'Feature List' );

    tag_open( 'ul' );

      tag_open( 'li' );

        render_link_internal(
          'Feature Index',
          url_base() . '/feature.php#heading',
          TITLE_FEATURE_INDEX,
        );

      tag_shut( 'li' );

      $list = app_stash()->get_list( Feature::class );

      foreach ( $list as $feature ) {

        if ( $feature->get_video_count() === 0 ) { continue; }

        tag_open( 'li' );

          $feature->render_link_internal();

        tag_shut( 'li');

      }

    tag_shut( 'ul' );

  tag_shut( 'section' );

}
