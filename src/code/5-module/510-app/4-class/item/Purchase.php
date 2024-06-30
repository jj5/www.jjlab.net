<?php

function purchase() {
  
  return new_item( Purchase::class, func_get_args() );

}

class NullPurchase extends Purchase {
  
  use NullItemMixin;

}

class Purchase extends Item {

  private $vendor_url = null;

  public function get_equipment_url() { return $this->get( EquipmentUrl::class ); }
  public function get_order_url() { return $this->get( OrderUrl::class ); }
  public function get_order_id() { return $this->get( OrderId::class ); }
  public function get_order_date() { return $this->get( OrderDate::class ); }
  public function get_order_item_name() { return $this->get( OrderItemName::class ); }
  public function get_order_price() { return $this->get( OrderPrice::class ); }
  public function get_order_options() { return $this->get( OrderOptions::class ); }
  public function get_order_quantity() { return $this->get( OrderQuantity::class ); }
  public function get_order_shipping() { return $this->get( OrderShipping::class ); }
  public function get_order_tax() { return $this->get( OrderTax::class ); }
  public function get_order_discount() { return $this->get( OrderDiscount::class ); }

  public function get_product_code() {

    return $this->get_equipment_url()->get_product_code();

  }

  public function get_vendor() {

    return $this->get_equipment_url()->get_vendor();

  }

  public function get_vendor_url() {

    if ( $this->vendor_url !== null ) { return $this->vendor_url; }

    $equipment_url = $this->get_equipment_url();
    $product_code = $equipment_url->get_product_code();

    if ( $product_code ) {

      foreach ( $this->get_parent()->get_affiliate_link_list() as $affiliate_link ) {

        $affiliate_url = $affiliate_link->get_equipment_url();

        if (
          $affiliate_url->get_product_code() === $product_code &&
          $affiliate_url->get_domain() === $equipment_url->get_domain()
        ) {

          $vendor_url = $affiliate_link->get_affiliate_url();

          if ( ! $vendor_url->is_null() ) {

            $this->vendor_url = $vendor_url;

            return $vendor_url;

          }
        }
      }
    }

    $this->vendor_url = $equipment_url;

    return $equipment_url;

  }
}
