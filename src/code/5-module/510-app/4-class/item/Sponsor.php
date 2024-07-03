<?php

function sponsor() {

  return new_item( Sponsor::class, func_get_args() );

}

class NullSponsor extends Sponsor {

  use NullItemMixin;

}

class Sponsor extends Item {

  public function get_sponsor_name() { return $this->get( SponsorName::class ); }
  public function get_sponsor_url() { return $this->get( SponsorUrl::class ); }
  public function get_sponsor_reason() { return $this->get( SponsorReason::class ); }

  public function render( $text = null, $attrs = [] ) {

    $sponsor_name = $this->get_sponsor_name()->to_string();

    if ( $text === null ) { $text = $sponsor_name; }

    $url = $this->get_sponsor_url()->to_string();
    $tooltip = "Super big shout out to $sponsor_name for supporting the channel!";

    tag_text(
      'a',
      $text,
      $attrs + [
        'href' => $url,
        'class' => 'external',
        'target' => '_blank',
        'rel' => 'noopener follow',
        'title' => $tooltip,
      ]
    );

  }

  public function get_link_html( $text = null, $attrs = [] ) {

    nip_init();

      $this->render( $text, $attrs );

    nip_done( $result );

    return $result;

  }
}
