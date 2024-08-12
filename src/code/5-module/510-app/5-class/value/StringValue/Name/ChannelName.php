<?php

function channel_name( $arg ) {

  return new_value( ChannelName::class, $arg );

}

class ChannelName extends name {}

class NullChannelName extends ChannelName {

  use NullValue;

}
