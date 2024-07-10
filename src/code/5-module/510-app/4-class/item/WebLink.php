<?php

function web_link() {

  return new_item( WebLink::class, func_get_args() );

}

class NullWebLink extends WebLink {

  use NullItemMixin;

}

class WebLink extends Item {

  public function get_link_href() { return $this->get( LinkHref::class ); }
  public function get_link_text() { return $this->get( LinkText::class ); }

  public function render() {

    render_link_external(
      $this->get_link_text()->to_string(),
      $this->get_link_href()->to_string(),
      TITLE_LINK_EXTERNAL,
    );

  }

  public function to_html() {

    nip_init();

      $this->render();

    nip_done( $result );

    return $result;

  }
}
