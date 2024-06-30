<?php

function link_text() {

  return new_value( LinkText::class, func_get_args() );

}

class LinkText extends StringValue {}

class NullLinkText extends LinkText {

  use NullValue;

}
