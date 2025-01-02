<?php

function web_link() {

  return new_thing( WebLink::class, func_get_args() );

}

class NullWebLink extends WebLink {

  use NullThingMixin;

}

class WebLink extends Link {

}
