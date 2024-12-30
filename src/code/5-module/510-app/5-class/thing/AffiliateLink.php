<?php

function affiliate_link() {

  return new_thing( AffiliateLink::class, func_get_args() );

}

class AffiliateLink extends AppThing implements ILink {

  protected $affiliate = null;
  protected $item_total = null;

  public function get_equipment_url() { return $this->get( EquipmentUrl::class ); }
  public function get_affiliate_url() { return $this->get( AffiliateUrl::class ); }
  public function get_listing_name() { return $this->get( ListingName::class ); }
  public function get_equipment_info() { return $this->get( EquipmentInfo::class ); }
  public function get_equipment_name() { return $this->get_equipment_info()->get_equipment_name(); }
  public function get_item_options() { return $this->get( ItemOptions::class ); }
  public function get_item_price() { return $this->get( ItemPrice::class ); }
  public function get_item_shipping() { return $this->get( ItemShipping::class ); }
  public function get_item_total() {

    if ( $this->item_total === null ) {

      $shipping = $_GET[ 'shipping' ] ?? '1';

      if ( $shipping === '0' ) {

        $this->item_total = $this->get_item_price();

      }
      else {

        $this->item_total = $this->get_item_price()->add_price( $this->get_item_shipping() );

      }
    }

    return $this->item_total;

  }

  public function get_affiliate() {

    if ( $this->affiliate === null ) {

      $this->affiliate = NullAffiliate::Instance();

      $url = $this->get_equipment_url()->to_string();

      if ( $this->is_null() || empty( $url ) ) {

        return $this->affiliate;

      }

      $parts = parse_url( $url );

      $host = $parts[ 'host' ];

      $affiliate_url = "https://$host/";

      foreach ( get_list( Affiliate::class ) as $affiliate ) {

        if ( $affiliate->get_affiliate_url()->to_string() !== $affiliate_url ) { continue; }

        $this->affiliate = $affiliate;

        break;

      }
    }

    return $this->affiliate;

  }

  public function get_sort_value() {

    return $this->get_item_price()->to_USD()->get_sort_value();

    //return $this->get_item_total()->to_AUD()->get_value();

  }

  public function render( mixed $format = null, array $attrs = [] ): void {

    render_link_external(
      $this->get_link_text(),
      $this->get_link_href(),
      TITLE_AFFILIATE_LINK,
      [
        'class' => $this->get_link_class(),
      ],
    );

  }

  public function to_html( mixed $format = null ) : string {

    nip_init();

      $this->render();

    nip_done( $result );

    return $result;

  }

  public function get_link_class() {

    if ( $this->get_affiliate_url()->to_string() ) { return 'affiliate external'; }

    return 'external';

  }

  public function get_link_href() {

    if ( ! $this->get_affiliate_url()->is_empty() ) {

      return $this->get_affiliate_url()->to_string();

    }

    return $this->get_equipment_url()->to_string();

  }

  public function get_link_text() {

    $result = $this->get_listing_name()->to_string();

    if ( $result ) { return $result; }

    return $this->get_affiliate()->get_affiliate_name()->to_string();

  }
}

class NullAffiliateLink extends AffiliateLink {

  use NullThingMixin;

}
