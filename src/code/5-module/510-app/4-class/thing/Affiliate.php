<?php

function affiliate() {

  return new_thing( Affiliate::class, func_get_args() );

}

class Affiliate extends AppThing {

  public function get_affiliate_name() { return $this->get( AffiliateName::class ); }
  public function get_affiliate_url() { return $this->get( AffiliateUrl::class ); }

  public function get_link_html( $text = null, $attrs = [] ) {

    if ( $text === null ) { $text = $this->get_affiliate_name()->to_string(); }

    $url = $this->get_affiliate_url()->to_string();

    //$url_html = henc( $url );
    //$text_html = henc( $text );
    //return "<a href='$url_html' class='affiliate external' target='_blank'>$text_html</a>";

    ob_start();

    render_link_external(
      $text,
      $url,
      TITLE_LINK_AFFILIATE,
      $attrs,
    );

    return ob_get_clean();

  }

  public function get_search_url( $query ) {

    switch ( $this->get_affiliate_url()->to_string() ) {

      case 'https://www.amazon.com/' :

        return 'https://www.amazon.com/s?s=price-asc-rank&k=' . urlencode( $query );

      case 'https://www.amazon.com.au/' :

        return 'https://www.amazon.com.au/s?s=price-asc-rank&k=' . urlencode( $query );

      case 'https://www.ebay.com/' :

        return 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&LH_ItemCondition=1000&rt=nc&LH_BIN=1&_nkw=' . urlencode( $query );
        //return 'https://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=' . urlencode( $query );
        //return 'https://www.ebay.com/sch/i.html?_sop=15&_nkw=' . urlencode( $query );

      case 'https://www.ebay.com.au/' :

        return 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&LH_ItemCondition=1000&rt=nc&LH_BIN=1&_nkw=' . urlencode( $query );
        //return 'https://www.ebay.com.au/sch/i.html?_from=R40&_sacat=0&_sop=15&rt=nc&LH_ItemCondition=1000&_nkw=' . urlencode( $query );
        //return 'https://www.ebay.com.au/sch/i.html?_sop=15&_nkw=' . urlencode( $query );

      case 'https://www.aliexpress.com/' :

        $q = urlencode( $query );
        $q = str_replace( '+', '-', $q );

        return "https://www.aliexpress.com/w/wholesale-$q.html";

    }

    return $this->get_affiliate_url()->to_string() . '?q=' . urlencode( $query );

  }
}

class NullAffiliate extends Affiliate {

  use NullThingMixin;

}
