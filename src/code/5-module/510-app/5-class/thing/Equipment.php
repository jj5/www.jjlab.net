<?php

function equipment() {

  return new_thing( Equipment::class, func_get_args() );

}

class Equipment extends AppThing {

  private $tag = null;

  public function get_tag() {

    if ( $this->tag === null ) {

      $this->tag = $this->get_equipment_name()->to_string();

    }

    return $this->tag;

  }

  public static function get_affiliated_list() {

    static $equipment_list = null;

    if ( $equipment_list === null ) {

      $raw_equipment_list = get_list( Equipment::class );

      $equipment_list = [];

      foreach ( $raw_equipment_list as $equipment ) {

        if ( $equipment->has_affiliate_link() ) {

          $equipment_list[] = $equipment;

        }
      }

      verify_equipment( $equipment_list );

    }

    return $equipment_list;

  }

  public function has_affiliate_link() {

    // 2024-08-07 jj5 - space in the YouTube description is at a premium, so we only want to include equipment that we
    // can link to with an affiliate link. At the moment that means eBay and AliExpress.

    static $ad_list = [
      'https://www.ebay.com/',
      'https://www.ebay.com.au/',
      'https://www.aliexpress.com/',
    ];

    static $ignore_list = [
      'https://www.amazon.com/',
      'https://www.amazon.com.au/',
      'https://www.altronics.com.au/',
      'https://www.bunnings.com.au/',
      'https://www.dyson.com/',
      'https://www.wasdkeyboards.com/',
      'https://au.element14.com/',
    ];

    $affiliate_list = $this->get_affiliate_link_list();

    foreach ( $affiliate_list as $affiliate_link ) {

      $url = $affiliate_link->get_equipment_url()->to_string();

      foreach ( $ad_list as $ad ) {

        if ( strpos( $url, $ad ) === 0 ) {

          return true;

        }
      }

      if ( mud_is_debug() ) {

        foreach ( $ignore_list as $ignore ) {

          if ( strpos( $url, $ignore ) === 0 ) {

            return false;

          }
        }

        // 2024-08-07 jj5 - if we find something we don't know about yet make some noise so I can add it to the list.

        dump( $url );

      }
    }
  }

  public function format( mixed $spec = null ) : string {

    return $this->get_equipment_name()->to_string();

  }

  public function get_directory_name() {

    $info = $this->get_equipment_info();

    $equipment = $info->get_equipment_object();

    if ( $equipment->is_null() ) { return null; }

    $equipment_class = $equipment->equipment_class;

    return strtolower( $equipment_class->value ) . '-' . $this->get_equipment_id();

  }

  public function get_equipment_date() { return $this->get( EquipmentDate::class ); }
  public function get_equipment_icon() { return $this->get( EquipmentIcon::class ); }

  public function get_equipment_name() { return $this->get( EquipmentNameOld::class ); }

  public function get_affiliate_link_list() {

    return $this->get_list( AffiliateLink::class );

  }

  public function get_purchase_list() { return $this->get_list( Purchase::class ); }

  public function get_equipment_info() { return $this->get( EquipmentInfo::class ); }
  public function get_sixsigma_url() { return $this->get( SixsigmaUrl::class ); }

  public function get_warning_list() { return $this->get_list( Warning::class ); }
  public function get_note_list() { return $this->get_list( Note::class ); }

  public function get_see_also_list() {

    static $equipment_map = null;

    $see_also_list = $this->get_list( SeeAlso::class );

    if ( mud_is_debug() ) {

      if ( $equipment_map === null ) {

        $equipment_map = [];

        foreach ( get_list( Equipment::class ) as $equipment ) {

          $id = $equipment->get_equipment_name()->get_html_id();

          $equipment_map[ $id ] = $equipment;

        }

      }

      foreach ( $see_also_list as $see_also ) {

        $id = $see_also->get_html_id();

        if ( ! isset( $equipment_map[ $id ] ) ) {

          dump( $id );

        }

      }


    }

    return $see_also_list;

  }

  public function get_web_link_list() { return $this->get_list( WebLink::class ); }
  public function get_video_link_list() { return $this->get_list( VideoLink::class ); }

  public function get_video_list( $section_list, $limit = 10 ) {

    $tag = $this->get_tag();

    if ( ! $tag ) { return []; }

    $result = [];

    foreach ( $section_list as $section ) {

      if ( strpos( $section->get_tags()->get_tag_text(), $tag ) !== false ) {

        $result[] = $section->get_video_link();

      }

      if ( count( $result ) >= $limit ) { break; }

    }

    return $result;

  }

  public function get_category_list() {

    $result = $this->get_equipment_info()->get_list( Category::class );

    Category::sort_natural( $result );

    return $result;

  }

  private $sort_value = null;

  public function get_sort_value() {

    if ( $this->sort_value === null ) {

      /*
      $result = null;

      foreach ( $this->get_affiliate_link_list() as $affiliate_link ) {

        $value = $affiliate_link->get_item_price()->to_USD()->get_sort_value();

        if ( $result === null || $value > $result ) {

          $result = $value;

        }
      }
      */

      $result = 0;

      foreach ( $this->get_purchase_list() as $purchase ) {

        if ( $result === 0 ) {

          $result = $purchase->get_adjusted_price();

        }
        else {

          $result = min( $result, $purchase->get_adjusted_price() );

        }
      }

      if ( $result === 0 ) {

        foreach ( $this->get_affiliate_link_list() as $affiliate_link ) {

          $value = $affiliate_link->get_item_price()->to_AUD()->get_sort_value();

          if ( $result === 0 ) {

            $result = $value;

          }
          else {

            $result = min( $result, $value );

          }
        }
      }

      $this->sort_value = $result;

    }

    return $this->sort_value;

  }

  public function get_min_USD() {

    $result = null;

    foreach ( $this->get_affiliate_link_list() as $affiliate_link ) {

      $value = $affiliate_link->get_item_price()->to_USD();

      if ( $result === null || $value->get_value() > $result->get_value() ) {

        $result = $value;

      }
    }

    return $result;

  }

  private $equipment_id = null;

  public function get_equipment_id() {

    if ( $this->equipment_id === null ) {

      $this->equipment_id = get_html_id( $this->get_equipment_name()->to_id() );

    }

    return $this->equipment_id;

  }

  private $first_purchase_date;

  public function get_first_purchase_date() {

    if ( $this->first_purchase_date ) { return $this->first_purchase_date; }

    $purchase_list = $this->get_list( Purchase::class );

    if ( ! $purchase_list ) {

      $this->first_purchase_date = NullFirstPurchaseDate::Instance();

    }
    else {

      usort(
        $purchase_list,
        function( $a, $b ) {

          $a_date = $a->get_order_date();
          $b_date = $b->get_order_date();

          if ( $a_date->is_empty() ) {

            if ( $b_date->is_empty() ) { return -1; }

            return -1;

          }

          if ( $b_date->is_empty() ) { return -1; }

          return
            $a_date->get_value()->getTimestamp() -
            $b_date->get_value()->getTimestamp();
        }
      );

      $this->first_purchase_date = first_purchase_date( $purchase_list[ 0 ]->get_order_date() );

    }

    return $this->first_purchase_date;

  }

  public function get_search_link() {

    // 2024-01-17 jj5 - format: https://duckduckgo.com/?q=Rigol+MSO5000+PLA2216+Custom+16+Channel+Logic+Probe+with+Cable&t=ftsa&atb=v379-1&ia=web

    $name = $this->get_equipment_name()->to_string();

    $query = urlencode( $name );

    $href = 'https://duckduckgo.com/?t=ftsa&atb=v379-1&ia=web&q=' . $query;
    $text = "Search: $name";

    return web_link(
      link_href( $href ),
      link_text( $text ),
    );

  }

  public function get_manufacturer_id() {

    return get_html_id( $this->get_equipment_info()->get_manufacturer_name() );

  }

  public function is_manufactured_by( $manufacturer_name ) {

    return $this->get_equipment_info()->get_manufacturer_name()->to_string() === $manufacturer_name;

  }

  public static function sort_cheap_first( &$equipment_list ) {

    usort(
      $equipment_list,
      function ( $a, $b ) { return $a->get_sort_value() - $b->get_sort_value(); }
    );

  }

  public static function sort_expensive_first( &$equipment_list ) {

    usort(
      $equipment_list,
      function ( $a, $b ) {

        return $b->get_sort_value() - $a->get_sort_value();

      }
    );

  }

  public static function sort_new_first( &$equipment_list ) {

    usort(
      $equipment_list,
      function ( $a, $b ) {

        $a_date = $a->get_first_purchase_date();

        $b_date = $b->get_first_purchase_date();

        if ( $a_date->is_empty() ) {

          if ( $b_date->is_empty() ) { return 0; }

          return 1;

        }

        if ( $b_date->is_empty() ) { return -1; }

        $a_value = $a_date->get_value();
        $b_value = $b_date->get_value();

        if ( $a_value === null ) { dump( $a_date ); }
        if ( $b_value === null ) { dump( $b_date ); }

        return $b_value->get_timestamp() - $a_value->get_timestamp();

      }
    );

  }

  public static function sort_old_first( &$equipment_list ) {

    usort(
      $equipment_list,
      function ( $a, $b ) {

        $a_date = $a->get_first_purchase_date();

        $b_date = $b->get_first_purchase_date();

        if ( $a_date->is_empty() ) {

          if ( $b_date->is_empty() ) { return 0; }

          return 1;

        }

        if ( $b_date->is_empty() ) { return -1; }

        $a_value = $a_date->get_value();
        $b_value = $b_date->get_value();

        if ( $a_value === null ) { dump( $a_date ); }
        if ( $b_value === null ) { dump( $b_date ); }

        return $a_value->get_timestamp() - $b_value->get_timestamp();

      }
    );

  }

  public function get_short_link() {

    $url = 'https://www.inthelabwithjayjay.com/in-the-lab/equipment.php#' . $this->get_equipment_id();

    return itl()->get_short_link( $url );

  }
}

class NullEquipment extends Equipment {

  use NullThingMixin;

}
