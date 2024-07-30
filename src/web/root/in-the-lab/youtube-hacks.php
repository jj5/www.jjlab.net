<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_youtube_hacks_main();

    default :

      default_redirect( url_base() . '/youtube-hacks.php' );

  }
}

function render_youtube_hacks_main() {

  $title = 'YouTube Hacks';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );

        tag_open( 'p' );

          out_text( "On this page I will keep notes about YouTube hacks you can use to improve your experience." );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    tag_open( 'section' );

      tag_text( 'h2', 'Increase Playback Speed More Than 2x', [ 'id' => 'playback-speed' ] );

      tag_open( 'p' );

        out_text( "The standard playback speed options for a YouTube video supported by the user interface " );
        out_text( "are 0.25x, 0.5x, 0.75x, 1x, 1.25x, 1.5x, 1.75x, and 2x. ");
        out_text( "But you can increase the playback speed of a YouTube video to more than 2x by using the following " );
        out_text( "JavaScript in your browser's console. To bring up the console press F12. Then copy and paste " );
        out_text( "the following code into the console and press Enter." );

      tag_shut( 'p' );

      tag_open( 'pre' );

        out_text( 'document.querySelector("video").playbackRate = 3.0;' );

      tag_shut( 'pre' );

      tag_open( 'p' );

        out_text( "The code above will increase the playback speed to 3x speed. You can use a different number to get " );
        out_text( "a different speed. For example, to get 2.5x speed you would use 2.5 instead of 3.0." );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( 'You can drag and drop the following bookmarklet link to your bookmarks bar to create a bookmarklet: ' );

        tag_text(
          'a',
          '3x',
          [
            'href' => 'javascript:(function(){document.querySelector("video").playbackRate = 3.0;})();',
            'title' => 'Drag and drop the link to your bookmarks bar to create a bookmarklet.',
          ]
        );

        out_text( '. ' );

        out_text( 'Then when you are watching a YouTube video you can click the bookmarklet to increase the playback speed to 3x. ' );

        out_text( 'You can edit the bookmarklet to change the speed to a different value. ' );

        out_text( 'The bookmarklet will only work on the current YouTube video page. ' );
        
        out_text( 'If you navigate to a different page you will need to click the bookmarklet again. ' );

        out_text( 'If you refresh the page you will need to click the bookmarklet again.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
