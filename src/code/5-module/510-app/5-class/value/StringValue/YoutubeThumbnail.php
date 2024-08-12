<?php

function youtube_thumbnail( $arg ) {

  return new_value( YoutubeThumbnail::class, $arg );

}

class YoutubeThumbnail extends StringValue {}

class NullYoutubeThumbnail extends YoutubeThumbnail {

  use NullValue;

}
