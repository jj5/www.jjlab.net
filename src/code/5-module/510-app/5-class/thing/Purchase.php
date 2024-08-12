<?php

function purchase() {
  
  return new_thing( Purchase::class, func_get_args() );

}

class Purchase extends AppThing {

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

  private $adjusted_price = null;

  public function get_adjusted_price() {

    if ( $this->adjusted_price === null ) {

      $price = $this->get_order_price()->to_AUD()->to_int();
      $adjustment = $this->get_order_adjustment();
      $adjusted_price = $price + $adjustment;

      $this->adjusted_price = $adjusted_price;

    }

    return $this->adjusted_price;

  }

  private $adjustment = null;

  public function get_order_adjustment() {

    if ( $this->adjustment === null ) {

      $shipping = $this->get_order_shipping()->to_AUD()->to_int();
      $tax = $this->get_order_tax()->to_AUD()->to_int();
      $discount = $this->get_order_discount()->to_AUD()->to_int();

      $adjustment = $shipping + $tax - $discount;

      $this->adjustment = intval( round( $adjustment / $this->get_order_quantity()->to_int() ) );

    }

    return $this->adjustment;

  }
}

class NullPurchase extends Purchase {
  
  use NullThingMixin;

}
