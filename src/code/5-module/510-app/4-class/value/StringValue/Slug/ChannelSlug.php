<?php

function channel_slug() {

  return new_value( ChannelSlug::class, func_get_args() );

}

class ChannelSlug extends Slug {}

class NullChannelSlug extends ChannelSlug {

  use NullValue;

}
