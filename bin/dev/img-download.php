#!/usr/bin/env php
<?php

function main( $argv ) {

  $list = get_list( Equipment::class );

  $count = count( $list );

  mud_log_trace( "processing $count equipment items." );

  while ( count( $list ) ) {

    $equipment = array_shift( $list );

    $pid = pcntl_fork();

    if ( $pid === -1 ) {

      mud_fail( 'cannot fork.' );

    }
    else if ( $pid === 0 ) {

      // 2024-08-12 jj5 - child process...

      $equipment->get_equipment_icon()->get_public_url();

      exit( 0 );

    }
    else {

      // 2024-08-12 jj5 - parent process...

      $pid_list[] = $pid;

      if ( count( $pid_list ) > 20 ) {

        $pid = pcntl_wait( $status );

        $pid_list = array_filter( $pid_list, function( $pid_cmp ) use ( $pid ) { return $pid_cmp !== $pid; } );

        if ( $status !== 0 ){

          mud_fail( 'child process failed.', [ 'pid' => $pid, 'status' => $status ] );

        }
      }
    }
  }
}

require_once __DIR__ . '/../../run/run-cli.php';
