<?php

function youtube_url() {

  return new_value( YoutubeUrl::class, func_get_args() );

}

class YoutubeUrl extends Url {}

class NullYoutubeUrl extends YoutubeUrl {

  use NullValue;

}
