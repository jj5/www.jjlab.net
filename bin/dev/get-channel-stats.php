#!/usr/bin/env php
<?php

require_once __DIR__ . '/../../inc/framework.php';
require_once __DIR__ . '/../../config.php';

function main( $argv ) {

  $channel_slug = $argv[ 1 ] ?? null;

  $channel_id = get_channel_id( $channel_slug );

  if ( ! $channel_id ) { die( "Channel not found.\n" ); }

  get_channel_stats( $channel_slug );

}

function query( $client, $channel_slug ) {

  $channel_id = get_channel_id( $channel_slug );

  $youtube = new Google_Service_YouTube( $client );

  $next_page_token = '';

  do {

    $response = $youtube->search->listSearch('snippet', [
      'channelId'    => $channel_id,
      'maxResults'   => 50, // Maximum number of results per page
      'order'        => 'date', // Order by date
      'type'         => 'video', // Only get videos
      'pageToken'    => $next_page_token, // Handle pagination
    ]);

    // Process the response
    foreach ( $response[ 'items' ] as $item ) {

      $video_id = $item[ 'id' ][ 'videoId' ];
      $title = $item[ 'snippet' ][ 'title' ];
      $published_at = $item[ 'snippet' ][ 'publishedAt' ];

      $duration = query_video_duration( $youtube, $channel_slug, $video_id );

      echo "Video ID: $video_id, Duration: $duration\n";

    }

    // Get the next page token to fetch the next page of results
    $next_page_token = $response->getNextPageToken();

  }
  while ( $next_page_token !== null );

}

main( $argv );
