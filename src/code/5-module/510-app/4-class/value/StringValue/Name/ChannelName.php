<?php

function channel_name() {

  return new_value( ChannelName::class, func_get_args() );

}

class ChannelName extends name {}

class NullChannelName extends ChannelName {

  use NullValue;

}
