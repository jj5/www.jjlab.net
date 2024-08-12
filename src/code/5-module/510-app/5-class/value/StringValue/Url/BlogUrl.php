<?php

function blog_url( $arg ) {

  return new_value( BlogUrl::class, $arg );

}

class BlogUrl extends Url {}

class NullBlogUrl extends BlogUrl {

  use NullValue;

}
