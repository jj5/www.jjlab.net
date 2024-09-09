#!/usr/bin/env php
<?php

//require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../inc/framework.php';
require_once __DIR__ . '/../config.php';

function main( $argv ) {

  $stats = get_channel_stats( '@EEVblog' );

}

function get_channel_stats( $channel_slug ) {

  $client = new Google_Client();

  $client->setDeveloperKey( YOUTUBE_API_KEY );

  query_channel_stats( $client, $channel_slug );

}

function get_channel_id( $channel_slug ) {

  static $channel_map = [
    '@InTheLabWithJayJay' => 'UCgX1SyvFyZRNQwqDBWGuHKQ',
    '@EEVblog' => 'UC2DjFE7Xf11URZqWBigcVOQ',
  ];

  return $channel_map[ $channel_slug ];

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

function query_channel_stats( $client, $channel_slug ) {

  $channel_id = get_channel_id( $channel_slug );

  $youtube = new Google_Service_YouTube( $client );

  $next_page_token = '';

  // 1. Get the Uploads Playlist ID for the Channel
  $channel_response = $youtube->channels->listChannels('contentDetails', array(
      'id' => $channel_id,
  ));

  if (empty($channel_response['items'])) {
      die('Channel not found.');
  }

  // Get the Uploads playlist ID (all videos of a channel are in this playlist)
  $uploadsPlaylistId = $channel_response['items'][0]['contentDetails']['relatedPlaylists']['uploads'];

  // Pagination token
  $nextPageToken = '';

  $interval_map = [];
  $duration_map = [];

  $counter = 0;

  do {
      // 2. Fetch the videos from the uploads playlist
      $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array(
          'playlistId' => $uploadsPlaylistId,
          'maxResults' => 50, // Max 50 videos per request
          'pageToken'  => $nextPageToken,
      ));

      // 3. Loop through each video and display details
      foreach ($playlistItemsResponse['items'] as $item) {

        $counter++;

          $video_id = $item['snippet']['resourceId']['videoId'];
          $title = $item['snippet']['title'];
          $publishedAt = $item['snippet']['publishedAt'];

          //echo "Video ID: $videoId, Title: $title, Published At: $publishedAt\n";

          $duration = query_video_duration( $youtube, $channel_slug, $video_id );

        $interval = new DateInterval( $duration );

        $interval_map[ $video_id ] = $interval;
        $duration_map[ $video_id ] = date_interval_to_seconds( $interval );

        //echo "$counter: $video_id: $duration\n";

      }

      // 4. Get the next page token for pagination
      $nextPageToken = $playlistItemsResponse['nextPageToken'];
  } while ($nextPageToken !== null); // Continue until there are no more pages

  $duration_list = array_values( $duration_map );

  $stats = mud_get_stats( $duration_list, MUD_STATS_TYPE_FLOAT );

  return $stats;

  doc_init();

  tag_open( 'table' );

    tag_open( 'tbody' );

      render_stats_rows( $stats );

    tag_shut( 'tbody' );

  tag_shut( 'table' );

}

function query_video_duration( $youtube, $channel_slug, $video_id ) {

  static $data = null;

  if ( $data === null ) {

    $data = new DataFile2( realpath( realpath( __DIR__ ) . '/../dat/duration.json' ) );

  }

  $duration = $data->get_value( $channel_slug, $video_id );

  if ( $duration && $duration !== 'P0D' ) { return $duration; }

  $response = $youtube->videos->listVideos('contentDetails', [
    'id' => $video_id,
  ]);

  // Process the response
  foreach ( $response[ 'items' ] as $item ) {

    $duration = $item[ 'contentDetails' ][ 'duration' ];

    //echo "Video ID: $video_id, Duration: $duration\n";

    $data->set_value( 'youtube_duration', $video_id, $duration );

    return $duration;

  }

  return null;

}

main( $argv );
