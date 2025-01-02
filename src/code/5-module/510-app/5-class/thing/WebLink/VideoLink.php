<?php

function video_link() {

  return new_thing( VideoLink::class, func_get_args() );

}

class NullVideoLink extends VideoLink {

  use NullThingMixin;

}

class VideoLink extends Link {

}
