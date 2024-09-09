<?php

function get_channel_id( $channel_slug ) {

  static $channel_map = [
    '@InTheLabWithJayJay'           => 'UCgX1SyvFyZRNQwqDBWGuHKQ',
    '@EEVblog'                      => 'UC2DjFE7Xf11URZqWBigcVOQ',
    '@AdriansDigitalBasement'       => 'UCE5dIscvDxrb7CD5uiJJOiw',
    '@AdriansDigitalBasementExtras' => 'UCHUKf3Gp3eNxa4CmAvxeNRw',
    '@MrCarlsonsLab'                => 'UCU9SoQxJewrWb_3GxeteQPA',
    '@LearnElectronicsRepair'       => 'UCFX1Z9N6aPWuCN_KR8UZ2vg',
    '@ElectroBOOM'                  => 'UCJ0-OtVpF0wOKEqT2Z1HEtA',
    '@GreatScottLab'                => 'UC6mIxFTvXkWQVEHPsEdflzQ',
    '@BigClive'                     => 'UCtM5z2gkrGRuWd0JQMx76qA',
  ];

  return $channel_map[ $channel_slug ] ?? null;

}

function get_channel_stats( $channel_slug ) {

  $client = new Google_Client();

  $client->setDeveloperKey( YOUTUBE_API_KEY );

  return query_channel_stats( $client, $channel_slug );

}

function query_channel_stats( $client, $channel_slug ) {

  $channel_id = get_channel_id( $channel_slug );

  $youtube = new Google_Service_YouTube( $client );

  $next_page_token = '';

  // 2024-09-09 jj5 - get the Uploads Playlist ID for the Channel...
  //
  $channel_response = $youtube->channels->listChannels( 'contentDetails', [
    'id' => $channel_id,
  ]);

  if ( empty( $channel_response[ 'items' ] ) ) {

    mud_fail( 'channel not found.', [ 'channel_slug' => $channel_slug ] );

  }

  // 2024-09-09 jj5 - get the Uploads playlist ID (all videos of a channel are in this playlist)...
  //
  $uploads_playlist_id = $channel_response[ 'items' ][ 0 ][ 'contentDetails' ][ 'relatedPlaylists' ][ 'uploads' ];

  $next_page_token = '';
  $duration_map = [];
  $counter = 0;

  do {

    // 2024-09-09 jj5 - fetch the videos from the uploads playlist...
    //
    $playlist_items_response = $youtube->playlistItems->listPlaylistItems( 'snippet', [
      'playlistId' => $uploads_playlist_id,
      'maxResults' => 50,
      'pageToken'  => $next_page_token,
    ]);

    // 2024-09-09 jj5 - loop through each video and display details...
    //
    foreach ( $playlist_items_response[ 'items' ] as $item ) {

      $counter++;

      $video_id = $item[ 'snippet' ][ 'resourceId' ][ 'videoId' ];
      $duration = query_video_duration( $youtube, $channel_slug, $video_id );
      //$title = $item[ 'snippet' ][ 'title' ];
      //$publishedAt = $item[ 'snippet' ][ 'publishedAt' ];

      $interval = new DateInterval( $duration );

      $duration_map[ $video_id ] = date_interval_to_seconds( $interval );

    }

    // 2024-09-09 jj5 - get the next page token for pagination...
    //
    $next_page_token = $playlist_items_response[ 'nextPageToken' ];

  }
  while ( $next_page_token !== null );

  $duration_list = array_values( $duration_map );

  $stats = mud_get_stats( $duration_list, MUD_STATS_TYPE_FLOAT );

  return $stats;

}

function query_video_duration( $youtube, $channel_slug, $video_id ) {

  static $data = null;

  if ( $data === null ) {

    $data = new DataFile2( realpath( APP_BASE_DIR . '/dat/duration.json' ) );

  }

  $duration = $data->get_value( $channel_slug, $video_id );

  if ( $duration && $duration !== 'P0D' ) { return $duration; }

  $response = $youtube->videos->listVideos( 'contentDetails', [
    'id' => $video_id,
  ]);

  foreach ( $response[ 'items' ] as $item ) {

    $duration = $item[ 'contentDetails' ][ 'duration' ];

    $data->set_value( $channel_slug, $video_id, $duration );

    return $duration;

  }

  return null;

}
