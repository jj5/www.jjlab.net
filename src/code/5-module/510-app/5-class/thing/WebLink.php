<?php

function web_link() {

  return new_thing( WebLink::class, func_get_args() );

}

class WebLink extends AppThing {

  public function get_link_href() { return $this->get( LinkHref::class ); }
  public function get_link_text() { return $this->get( LinkText::class ); }

  public function render( mixed $format = null, array $attrs = [] ): void {

    render_link_external(
      $this->get_link_text()->to_string(),
      $this->get_link_href()->to_string(),
      TITLE_LINK_EXTERNAL,
    );

  }

  public function to_html( mixed $format = null ) : string {

    nip_init();

      $this->render();

    nip_done( $result );

    return $result;

  }
}

class NullWebLink extends WebLink {

  use NullThingMixin;

}
