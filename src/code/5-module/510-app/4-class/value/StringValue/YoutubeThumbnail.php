<?php

function youtube_thumbnail() {

  return new_value( YoutubeThumbnail::class, func_get_args() );

}

class YoutubeThumbnail extends StringValue {}

class NullYoutubeThumbnail extends YoutubeThumbnail {

  use NullValue;

}
