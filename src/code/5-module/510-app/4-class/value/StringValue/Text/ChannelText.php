<?php

function channel_text() {

  return new_value( ChannelText::class, func_get_args() );

}

class ChannelText extends Text {}

class NullChannelText extends ChannelText {

  use NullValue;

}
