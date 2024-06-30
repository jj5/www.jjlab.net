<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  if ( $path_info === null ) { return render_feed(); }

  $path_parts = explode( '/', $path_info );

  array_shift( $path_parts );

  switch ( $path_parts[ 0 ] ?? '' ) {

    case '' :

      return render_feed();

    case 'channel' :

      return render_feed_channel( $path_parts[ 1 ] ?? null );

    case 'show' :

      return render_feed_show( $path_parts[ 1 ] ?? null );

    case 'feature' :

      return render_feed_feature( $path_parts[ 1 ] ?? null );

    default :

      return default_redirect( url_base() . '/feed.php' );

  }
}

function render_feed() {

  $video_list = app_stash()->get_live_video_list();

  render_feed_for_list( $video_list );

}

function render_feed_channel( $slug ) {

  $channel = app_stash()->get_channel( $slug );

  if ( $channel->is_null() ) { return default_redirect( url_base() . '/feed.php' ); }

  $video_list = $channel->get_live_video_list();

  return render_feed_for_list( $video_list, $channel );

}

function render_feed_show( $slug ) {

  $show = app_stash()->get_show( $slug );

  if ( $show->is_null() ) { return default_redirect( url_base() . '/feed.php' ); }

  $video_list = $show->get_live_video_list();

  return render_feed_for_list( $video_list, $show );

}

function render_feed_feature( $slug ) {

  $feature = app_stash()->get_feature( $slug );

  if ( $feature->is_null() ) { return default_redirect( url_base() . '/feed.php' ); }

  $video_list = $feature->get_live_video_list();

  return render_feed_for_list( $video_list, $feature );

}

function render_feed_for_list( $video_list, $topic = null ) {

  $latest = $video_list[ 0 ];

  $section = $topic ? $topic->get_name() . ' Videos' : '';

  if ( is_a( $topic, Channel::class ) ) {

    $section = $topic->get_slug() . ' Videos';

  }

  header( 'Content-Type: application/rss+xml; charset=utf-8' );
  header( 'Content-Disposition: inline' );

  doc_init(
    MUD_DOCTYPE_XML,
    MUD_HTML_DEFAULT_LANG,
    MUD_HTML_DEFAULT_CHARSET,
    MUD_CONTENT_TYPE_RSS,
  );

  if ( is_prod() ) {

    $feed_xsl = 'https://www.inthelabwithjayjay.com/in-the-lab/feed.xsl';
    $domain = 'https://www.inthelabwithjayjay.com';

  }
  else {

    $feed_xsl = url_base() . '/feed.xsl';
    $domain = 'http://localhost';

  }

  out_html( "<?xml-stylesheet href=\"$feed_xsl\" type=\"text/xsl\"?>\n" );

  tag_open(
    'rss',
    [
      'version' => '2.0',

      'xmlns:content' => 'http://purl.org/rss/1.0/modules/content/',
      //'xmlns:wfw' => 'http://wellformedweb.org/CommentAPI/',
      'xmlns:dc' => 'http://purl.org/dc/elements/1.1/',
      'xmlns:atom' => 'http://www.w3.org/2005/Atom',
      'xmlns:sy' => 'http://purl.org/rss/1.0/modules/syndication/',
      //'xmlns:slash' => 'http://purl.org/rss/1.0/modules/slash/',

      // 2024-07-01 jj5 - SEE: https://chatgpt.com/share/cd28dea6-a5c1-48ae-95ee-4ffa80848912
      'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
      'xsi:schemaLocation' => 'https://www.inthelabwithjayjay.com/in-the-lab/feed.xsd',
      'xsi:noNamespaceSchemaLocation' => 'https://www.inthelabwithjayjay.com/in-the-lab/feed.xsd',


    ]
  );

    tag_open( 'channel' );

      if ( ! $section ) { $section = 'All Videos'; }

      tag_text( 'title', "In The Lab With Jay Jay § $section" );

      tag_bare( 'atom:link', [ 'href' => mud_get_full_request_url(), 'rel' => 'self', 'type' => 'application/rss+xml' ] );
      tag_text( 'link', 'https://www.inthelabwithjayjay.com/' );
      tag_text( 'description', 'A video blog of interest to the electronics hobbyist.' );
      tag_text( 'lastBuildDate', $latest->get_publication_date()->format_for_web() );
      tag_text( 'language', 'en-US' );
      tag_text( 'sy:updatePeriod', 'hourly' );
      tag_text( 'sy:updateFrequency', '1' );
      tag_text( 'generator', JJLAB_CODE . '-' . JJLAB_VERSION_MAJOR . '.' . JJLAB_VERSION_MINOR );

      tag_open( 'image' );

        tag_text( 'url', 'https://www.inthelabwithjayjay.com/in-the-lab/img/logo.png' );
        tag_text( 'title', 'In The Lab With Jay Jay' );
        tag_text( 'link', 'https://www.inthelabwithjayjay.com/' );
        tag_text( 'width', '144' );
        tag_text( 'height', '144' );

      tag_shut( 'image' );    

      for ( $i = 0; $i < count( $video_list ); $i++ ) {

        if ( $i === 10 ) { break; }

        $video = $video_list[ $i ];

        $video_id = $video->get_slug();

        tag_open( 'item' );

          tag_text( 'title', $video->get_youtube_video_title() );
          tag_text( 'link', $domain . $video->get_internal_url() );
          tag_text( 'comments', $domain . url_base() . '/comment.php/' . $video_id );
          tag_text( 'dc:creator', 'John Elliot V' );
          tag_text( 'pubDate', $video->get_publication_date()->format_for_web() );

          if ( $topic ) {

            switch ( get_class( $topic ) ) {

              case Channel::class :

                tag_text( 'category', $topic->get_slug() );

                break;

              case Show::class :

                tag_text( 'category', $topic->get_channel()->get_slug() );
                tag_text( 'category', $topic->get_name() );

                break;

              case Feature::class :

                tag_text( 'category', $topic->get_channel()->get_slug() );
                tag_text( 'category', $topic->get_show()->get_name() );
                tag_text( 'category', $topic->get_name() );

                break;

              default :

                mud_not_supported();

            }
          }

          tag_text( 'guid', $domain . $video->get_internal_url(), [ 'isPermaLink' => 'true' ] );

          tag_text( 'description', 'Click through to see my latest video!' );

          tag_open( 'content:encoded' );

            out_html( '<![CDATA[' );

              tag_open( 'p' );

                out_text( 'Click through to see my ' );

                tag_text( 'a', 'latest video', [ 'href' => $domain . $video->get_internal_url() ] );

                out_text( '!' );

              tag_shut( 'p' );

            out_html( ']]>' );

          tag_shut( 'content:encoded' );

        tag_shut( 'item' );

      }

    tag_shut( 'channel' );

  tag_shut( 'rss' );

}
