<?php

function youtube_url( $arg ) {

  return new_value( YoutubeUrl::class, $arg );

}

class YoutubeUrl extends Url {}

class NullYoutubeUrl extends YoutubeUrl {

  use NullValue;

}
