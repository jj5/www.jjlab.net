<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  if ( is_prod() ) {
    
    return render_500();

  }

  //return app_stash()->render();

  render_head( 'Debug' );

    render_menu();

    render_channel_list();

    render_show_list();

    render_feature_list();

  render_foot();

}

function render_menu() {

  tag_open( 'section' );

    tag_text( 'h1', 'Menu' );

      tag_open( 'ul' );

        tag_open( 'li' );

          tag_text(
            'a',
            'Books',
            [
              'href' => url_base() . '/books.php',
              'class' => 'internal',
            ]
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          tag_text(
            'a',
            'Videos',
            [
              'href' => url_base() . '/videos.php',
              'class' => 'internal',
            ]
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          tag_text(
            'a',
            'Equipment Text',
            [
              'href' => url_base() . '/equipment-text.php',
              'class' => 'internal',
            ]
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          tag_text(
            'a',
            'Blog Template',
            [
              'href' => url_base() . '/blog-template.php',
              'class' => 'internal',
            ]
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          tag_text(
            'a',
            'Feed',
            [
              'href' => url_base() . '/feed.php',
              'class' => 'internal',
            ]
          );

        tag_shut( 'li' );

        tag_open( 'li' );

          tag_text(
            'a',
            'Sitemap',
            [
              'href' => url_base() . '/sitemap.php',
              'class' => 'internal',
            ]
          );

        tag_shut( 'li' );

      tag_shut( 'ul' );


  tag_shut( 'section' );

}

function render_channel_list() {

  tag_open( 'section' );

    tag_text( 'h1', 'Channel List' );

    tag_open( 'ul' );

      tag_open( 'li' );

        tag_text(
          'a',
          'Channel Index',
          [
            'href' => url_base() . '/channel.php',
            'class' => 'internal',
          ]
        );

      tag_shut( 'li' );

      $list = app_stash()->get_list( Channel::class );

      foreach ( $list as $channel ) {

        tag_open( 'li' );

          $channel->render_internal_link();

        tag_shut( 'li');

      }

    tag_shut( 'ul' );

  tag_shut( 'section' );

}

function render_show_list() {

  tag_open( 'section' );

    tag_text( 'h1', 'Show List' );

    tag_open( 'ul' );

      tag_open( 'li' );

        tag_text(
          'a',
          'Show Index',
          [
            'href' => url_base() . '/show-type.php',
            'class' => 'internal',
          ]
        );

      tag_shut( 'li' );

      $list = app_stash()->get_list( ShowType::class );

      foreach ( $list as $show_type ) {

        tag_open( 'li' );

          $show_type->render_internal_link();

        tag_shut( 'li');

      }

    tag_shut( 'ul' );

  tag_shut( 'section' );

}

function render_feature_list() {

  tag_open( 'section' );

    tag_text( 'h1', 'Feature List' );

    tag_open( 'ul' );

      tag_open( 'li' );

        tag_text(
          'a',
          'Feature Index',
          [
            'href' => url_base() . '/feature.php',
            'class' => 'internal',
          ]
        );

      tag_shut( 'li' );

      $list = app_stash()->get_list( Feature::class );

      foreach ( $list as $feature ) {

        if ( $feature->video_count() === 0 ) { continue; }

        tag_open( 'li' );

          $feature->render_internal_link();

        tag_shut( 'li');

      }

    tag_shut( 'ul' );

  tag_shut( 'section' );

}
