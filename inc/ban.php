<?php

(function() {

  $ban_list = [
    'meta-',
  ];

  $user_agent = trim( $_SERVER[ 'HTTP_USER_AGENT' ] ?? '' );

  foreach ( $ban_list as $ban ) {

    if ( strpos( $user_agent, $ban ) === 0 ) {

      // 2026-04-24 jj5 - if we're not buying, any excuse will do...
      //
      http_response_code( 429 ); // Too Many Requests
      exit;

    }
  }

})();
