<?php

function channel_slug( $arg ) {

  return new_value( ChannelSlug::class, $arg );

}

class ChannelSlug extends Slug {}

class NullChannelSlug extends ChannelSlug {

  use NullValue;

}
