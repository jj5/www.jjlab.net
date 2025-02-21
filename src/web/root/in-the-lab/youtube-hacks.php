<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_youtube_hacks_main();

    default :

      return default_redirect( url_base() . '/youtube-hacks.php#heading' );

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

        out_text( 'You can drag and drop the following bookmarklet links to your bookmarks bar to create a bookmarklet: ' );

      tag_shut( 'p' );

      tag_open( 'ul' );

        $setting = [
          '1x'    => '1.0',
          '1.25x' => '1.25',
          '1.5x'  => '1.5',
          '1.75x' => '1.75',
          '2x'    => '2.0',
          '2.5x'  => '2.5',
          '3x'    => '3.0',
          '3.5x'  => '3.5',
          '4x'    => '4.0',
          '4.5x'  => '4.5',
          '5x'    => '5.0',
        ];

        foreach ( $setting as $label => $speed ) {

          tag_open( 'li' );

            tag_text(
              'a',
              $label,
              [
                'href' => "javascript:(function(){document.querySelector('video').playbackRate = $speed;})();",
                'title' => "Drag and drop the link to your bookmarks bar to create a bookmarklet for $speed speed.",
              ]
            );

          tag_shut( 'li' );

        }

      tag_shut( 'ul' );

      tag_open( 'p' );

        out_text( 'Then when you are watching a YouTube video you can click the bookmarklet to set the playback speed. ' );

        out_text( 'You can edit the bookmarklet to change the speed to a different value. ' );

        out_text( 'The bookmarklet will only work on the current YouTube video page. ' );

        out_text( 'If you navigate to a different page you will need to click the bookmarklet again. ' );

        out_text( 'If you refresh the page you will need to click the bookmarklet again.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h2', 'Video Speed Controller Browser Plugin', [ 'id' => 'video-speed' ] );

      tag_open( 'p' );

        out_text( 'There are browser plugins that can be used to control the playback speed of a video. Check out the ' );

        render_link_external(
          "Video Speed Controller",
          'https://github.com/codebicycle/videospeed',
          TITLE_LINK_VIDEO_SPEED_CONTROLLER,
        );

        out_text( ' which is available as both a ' );

        render_link_external(
          "Firefox extension",
          'https://addons.mozilla.org/en-US/firefox/addon/videospeed/',
          TITLE_LINK_VIDEO_SPEED_CONTROLLER_FIREFOX,
        );

        out_text( ' and a ' );

        render_link_external(
          "Chrome extension",
          'https://chromewebstore.google.com/detail/video-speed-controller/nffaoalbilbmmfgbnbgppjihopabppdk?pli=1',
          TITLE_LINK_VIDEO_SPEED_CONTROLLER_CHROME,
        );

        out_text( '.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
