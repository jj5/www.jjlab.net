<?php

function channel_url( $arg ) {

  return new_value( ChannelUrl::class, $arg );

}

class ChannelUrl extends Url {}

class NullChannelUrl extends ChannelUrl {

  use NullValue;

}
