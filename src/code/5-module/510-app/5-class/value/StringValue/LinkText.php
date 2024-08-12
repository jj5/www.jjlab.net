<?php

function link_text( $arg ) {

  return new_value( LinkText::class, $arg );

}

class LinkText extends StringValue {}

class NullLinkText extends LinkText {

  use NullValue;

}
