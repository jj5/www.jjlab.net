<?php

function channel_text( $arg ) {

  return new_value( ChannelText::class, $arg );

}

class ChannelText extends Text {}

class NullChannelText extends ChannelText {

  use NullValue;

}
