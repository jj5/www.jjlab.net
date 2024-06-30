<?php

function channel_url() {

  return new_value( ChannelUrl::class, func_get_args() );

}

class ChannelUrl extends Url {}

class NullChannelUrl extends ChannelUrl {

  use NullValue;

}
