<?php

function link_href() {

  return new_value( LinkHref::class, func_get_args() );

}

class LinkHref extends Url {}

class NullLinkHref extends LinkHref {

  use NullValue;

}
