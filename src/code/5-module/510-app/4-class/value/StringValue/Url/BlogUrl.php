<?php

function blog_url() {

  return new_value( BlogUrl::class, func_get_args() );

}

class BlogUrl extends Url {}

class NullBlogUrl extends BlogUrl {

  use NullValue;

}
