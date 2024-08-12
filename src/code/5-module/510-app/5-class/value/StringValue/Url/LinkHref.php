<?php

function link_href( $arg ) {

  return new_value( LinkHref::class, $arg );

}

class LinkHref extends Url {}

class NullLinkHref extends LinkHref {

  use NullValue;

}
