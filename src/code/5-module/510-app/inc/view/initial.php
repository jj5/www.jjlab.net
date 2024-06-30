<?php

function render_head( $heading ) {

  doc_init();

  $heading_html = henc( $heading );

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>In The Lab With Jay Jay &mdash; <?= $heading_html ?></title>
  <meta charset="utf-8">
  <meta name="date" content="Fri 12 Jan 2024 12:38:31 AEDT">
  <meta name="author" content="John Elliot V et al.">
  <meta name="keywords" content="electronics, lab, video, experiment, kit">
  <meta name="description" content="In The Lab With Jay Jay is the video blog of John Elliot V">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <link href="<?= LOGO_URL ?>" rel="icon">

<?php /*
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <link
    rel="stylesheet"
    type="text/css"
    href="https://www.staticmagic.net/global/table.css?v=2024-01-12-123831">

  <script src="https://www.staticmagic.net/global/default.js?v=2024-01-12-123831"></script>
  */?>

  <link
    rel="stylesheet"
    type="text/css"
    href="https://d27cckvuinr11o.cloudfront.net/global/table.css?v=2024-01-12-123831">

  <script src="https://d27cckvuinr11o.cloudfront.net/global/default.js?v=2024-01-12-123831"></script>

<style>

html {
  min-height: 101%;
}

body {

  background-color: #E2E2E2;
  overflow: auto;

}

html, body, header, img {

  margin: 0px;
  padding: 0px;

}

main {
  /*
  font-family: 'Roboto', sans-serif;*/
  font: 15px "Helvetica Neue", Helvetica, Arial, sans-serif;

  width: 60rem;
  margin: 1rem auto;
  font-size: 14pt;
  /*background-color: #f6f6f6;*/
  background-color: #fcfcfc;
  border: 2px solid #BBBBBB;
}

table.main {

  width: 160rem;
  margin-left: -50rem;
  margin-bottom: 2rem;
}

main, footer {

  padding: 1rem;

}

footer {

  text-align: center;

}

p, ul, ol {

  max-width: 900px;

}

p, li {
  line-height: 1.6;
}

td p, td ul, td ol {

  max-width: 100%;

}

td {

  background-color: #fff !important;

}

#banner {
  width: 100%;
}

.row_number, .date, .copyright_year, .duration {

  text-align: right;

}

td.equipment {

  text-align: center;
  vertical-align: top !important;

}

td.equipment img {

  width: 300px;

}

td.affiliate_link table {

  margin: 0px;
  padding: 0px 1rem;

  border-collapse: collapse;


}

td.affiliate_link table, td.affiliate_link tbody, td.affiliate_link thead, td.affiliate_link tr {

  border: 0px;
  margin: 0px;
  padding: 0px;


}

td.affiliate_link table {

  width: 100%;

}

td.affiliate_link td {

  border: 1px solid black;
  margin: 0px;
  padding: 4px;

}

td.affiliate_link th {

  text-align: center;

}

td.affiliate, td.price, td.vendor {

  text-align: right;

}

td.search {

  vertical-align: top !important;

}

td.search ul {

  border: 0px;
  margin: 0px;
  padding: 0px 0px 0px 1rem;

}

.warning {

  color: red;

}

td.min-USD {

  text-align: right;
  vertical-align: top !important;

}

table img {
  width: 300px;
}

table tbody tr td.img {
  vertical-align: top !important;
  text-align: center;
}

th {
  text-align: center !important;
  vertical-align: middle !important;
}

td.affiliate, td.price {

  text-align: right;

}

table, tbody, thead, tr {

  background-color: rgba(0, 0, 0, 0) !important;

}

tr.spacer td {

  border: 1px solid black;

}

tr.row-1 td {

  border: 0px;
  background-color: rgba(0, 0, 0, 0) !important;

}

td div {

  padding: 0.37rem 0px;

}

.number {

  text-align: right;

}

a.internal {

  color: blue;

}

a.external {

  color: darkblue;

}

a.affiliate {

  color: green !important;

}

</style>

<script>

"use strict";

window.addEventListener( 'load', handle_load );
window.addEventListener( 'resize', handle_resize );

function handle_load() {
  //console.log( 'hi' );

  set_window_size_cookie();

};

function handle_resize() {

  //console.log('Window resized to ' + window.innerWidth + 'x' + window.innerHeight);

  set_window_size_cookie();

}

function set_window_size_cookie() {

  // Get window size
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  // Create cookie value
  var cookie_value = width + "x" + height;

  // Set cookie with window size (expires in 7 days)
  var d = new Date();
  d.setTime(d.getTime() + (7*24*60*60*1000)); // 7 days in milliseconds
  var expires = "expires=" + d.toUTCString();
  document.cookie = "sz=" + cookie_value + ";" + expires + ";path=/";

}

</script>

</head>
<body><header><img id="banner" src="<?= url_base( $use_cdn = true ) ?>/img/banner.jpg"></header>
  <main>
    <h1>In The Lab With Jay Jay</h1>
    <p>
      <a href="<?= url_base() ?>/" class="internal" title="Welcome!">Home</a>
      | <a href="<?= url_base() ?>/about.php" class="internal" title="Find out more about the show and this website">About</a>
      | <a href="<?= url_base() ?>/show.php/main-show" class="internal" title="The main channel is In The Lab With Jay Jay">Main Channel</a>
      | <a href="<?= url_base() ?>/show.php/extra-show" class="internal" title="The 2nd channel is Elliot's Extras">2nd Channel</a>
      | <a href="<?= url_base() ?>/feature.php/maxitronix" class="internal" title="We're working our way through the various Maxitronix electronic project labs">Maxitronix Xin1 Kits</a>
      | <a href="<?= url_base() ?>/sponsor.php" class="internal" title="Super big shout out to our sponsors!">Sponsors</a>
      | <a href="<?= url_base() ?>/affiliate.php" class="internal" title="Learn more about how affiliate links work on this website">Affiliates</a>
      | <a href="<?= url_base() ?>/equipment.php" class="internal" title="See what equipment John has in his lab with affiliate links for you to purchase from">Equipment</a>
<?php
      if ( is_dev() ) :
?>
      | <a href="<?= url_base() ?>/debug.php" class="internal">Debug</a>
<?php
      endif;
?>

    </p>
    <hr>
    <h2><?= henc( $heading ) ?></h2>
<?php
}

function render_foot() {
?>
  </main>
  <footer>
    <hr>
    <div>Copyright &copy; John Elliot V <?= date( 'Y' ) ?></div>
  </footer>
</body>
</html>
<?php
}

function list_maxitronix_kits() {
?>
<ul>
<?php
  foreach ( get_list( MaxitronixKit::class ) as $kit ) {
    $kit_html = henc( $kit->get_maxitronix_kit_name() );
?>
  <li><a href="<?= url_base() ?>/feature.php/maxitronix-<?= $kit_html ?>" class="internal">Maxitronix <?= $kit_html ?></a></li>
<?php
  }
?>
</ul>
<?php
}

function render_equipment_table( $equipment_list ) {

  $sort = $_GET[ 'sort' ] ?? 'expensive-first';

  if ( $sort === 'cheap-first' ) {

    Equipment::sort_cheap_first( $equipment_list );

  }
  elseif ( $sort === 'expensive-first' ) {

    Equipment::sort_expensive_first( $equipment_list );

  }
  elseif ( $sort === 'new-first' ) {

    Equipment::sort_new_first( $equipment_list );

  }
  elseif ( $sort === 'old-first' ) {

    Equipment::sort_old_first( $equipment_list );

  }
  elseif ( $sort === 'straight' ) {

    // 2024-01-15 jj5 - just leave the array in the order it's in...

  }
  elseif ( $sort === 'reverse' ) {

    $equipment_list = array_reverse( $equipment_list );

  }
  elseif ( $sort === 'random' ) {

    shuffle( $equipment_list );

  }
  elseif ( $sort === 'stable-random' ) {

    // 2024-01-13 jj5 - the default sort (was) random by hour

    // 2024-01-13 jj5 - we generate a new seed every hour...
    //
    $seed = intval( date( 'YmdH' ) );

    mt_srand( $seed );

    shuffle( $equipment_list );

  }

?>

<p>Prices in: <a href="?<?= get_link( [ 'currency' => 'USD' ] ) ?>" class="internal" title='Prices in United States dollars'>USD</a>
  | <a href="?<?= get_link( [ 'currency' => 'AUD' ] ) ?>" class="internal" title='Prices in Australian dollars'>AUD</a>
  | <a href="?<?= get_link_without( 'currency' ) ?>" class="internal" title='Use platform currency'>default</a>

  &mdash;

  Sort:
    <a href="?<?= get_link( [ 'sort' => 'cheap-first' ] ) ?>" class="internal" title='Sort from cheapest to most expensive'>cheap first</a>
  | <a href="?<?= get_link( [ 'sort' => 'expensive-first' ] ) ?>" class="internal" title='Sort from most expensive to cheapest'>expensive first</a>
  | <a href="?<?= get_link( [ 'sort' => 'new-first' ] ) ?>" class="internal" title='Sort with most recently purchased first'>newest first</a>
  | <a href="?<?= get_link( [ 'sort' => 'old-first' ] ) ?>" class="internal" title='Sort with the least recently purchased first'>oldest first</a>
  | <a href="?<?= get_link( [ 'sort' => 'random' ] ) ?>" class="internal" title='Sort randomly'>random</a>
  | <a href="?<?= get_link_without( 'sort' ) ?>" class="internal" title='Use the default sort (expensive first)'>default</a>
</p>

<table id='equipment' class="nice-table main">
  <tbody>
<?php

  $row_number = 0;

  foreach ( $equipment_list as $equipment ) {

    $row_number++;

    $affiliate_link_list = $equipment->get_affiliate_link_list();
    $purchase_list = $equipment->get_purchase_list();

    $count = count( $affiliate_link_list );
    $other_adjust = count( $purchase_list );

    if ( $purchase_list ) {

      $adjust = 4;
      $count += count( $purchase_list );

    }
    else {

      $adjust = 3;

    }

    $count = $count + $adjust;

    if ( count( $affiliate_link_list ) ) :

      $img_url = henc( $equipment->get_equipment_icon()->get_auto_url() );
      $equipment_text_html = henc( $equipment->get_equipment_name() );

      $id_html = $equipment->get_equipment_id();

      $short_link_html = henc( $equipment->get_short_link() );

?>
    <tr id="<?= $id_html ?>" class="spacer row-<?= $row_number ?>">
<?php /*
      <td style="width:225px !important;"></td>
      <td colspan="5"></td>
      <td></td> */ ?>
      <td colspan="7"></td>
    </tr>
    <tr>

      <td class="equipment img" rowspan="<?= $count ?>">
        <a href="#<?= $id_html ?>" class="internal">
          <div><?= $equipment_text_html ?></div>
          <div><img src="<?= $img_url ?>"></div></a>
        <div><?= $equipment->get_first_purchase_date()->to_html() ?></div>
        <div><a href="<?= $short_link_html ?>" class="internal" title='You can use this short link to link to this equipment'><?= $short_link_html ?></a></div>
<?php
      if ( is_dev() ) :
        ?><hr><?php

        foreach ( get_list( Affiliate::class ) as $affiliate ) :

          $href_html = henc( $affiliate->get_search_url( $equipment->get_equipment_name()->to_string() ) );
          $text_html = $affiliate->get_affiliate_name()->to_html();
?>
            <div><a href="<?= $href_html ?>" target='search' class="external"><?= $text_html ?></a></div>
<?php

        endforeach;
      endif;
?>
      </td>
      <td colspan="7" class="equipment" style="height:2rem"><h2><?= $equipment_text_html ?></h2>
<?php $link_list = $equipment->get_category_list(); ?>
<?php $manufacturer = $equipment->get_equipment_info()->get_manufacturer_name(); ?>
<?php if ( ! $manufacturer->is_null() ) { array_unshift( $link_list, $manufacturer ); } ?>
<?php $link_number = 0; ?>
<?php foreach ( $link_list as $link ) : ?>
<?php   $link_number++; ?>
<?php   if ( $link_number !== 1 ) { echo ' | '; } ?>
<?php   if ( is_a( $link, Category::class ) ) : ?>
          <a href="<?= url_base() ?>/category.php/<?= henc( $link->get_category_id() ) ?>" class="internal" title='Show other equipment in this category'><?= $link->to_html() ?></a>
<?php   else : ?>
          <a href="<?= url_base() ?>/manufacturer.php/<?= henc( $link->get_manufacturer_id() ) ?>" class="internal" title='Show other equipment from this manufacturer'><?= $link->to_html() ?></a>
<?php   endif; ?>
<?php endforeach; ?>
      </td>
    </tr>
<?php
    endif;

?>
    <tr style="height:2rem">
      <th style="width:5% !important;">Affiliate</th>
      <th colspan="2" style="width:10% !important;">Unit Price</th>
      <th>Affiliate Link (Click-through for the latest price and to buy!)</th>
      <th style="width:20% !important;">Option(s)</th>
      <th style="width:4rem !important;">Notes</th>
    </tr>
<?php

      // 2024-01-17 jj5 - always sort these from cheap to expensive...
      //
      usort(
        $affiliate_link_list,
        function ( $a, $b ) { return $a->get_sort_value() - $b->get_sort_value(); }
      );

      $affiliate_number = 0;

      foreach ( $affiliate_link_list as $affiliate_link ) {

        $affiliate_number++;

        $affiliate = $affiliate_link->get_affiliate();

        echo "<tr style='height:2rem'>\n";

        $href_html = $affiliate->get_affiliate_url()->to_html();
        $text_html = $affiliate->get_affiliate_name()->to_nbsp();
        //echo "<td><a href='$href_html'>$text_html</a></td>";
        echo "<td class='affiliate'>$text_html:</td>";

        $equipment_date = $equipment->get_equipment_date();
        $title_html = henc( "Price current as of $equipment_date" );

        $text_html = $affiliate_link->get_item_price()->to_html();
        echo "<td colspan='2' class='price' title='$title_html'>$text_html</td>";

        /*
        $text_html = $affiliate_link->get_item_shipping()->to_html();
        echo "<td class='price shipping'>$text_html</td>";

        $text_html = $affiliate_link->get_item_total()->to_html();
        echo "<td class='price total'>$text_html</td>";
        */

        echo "<td class='affiliate_link' title='Click through for the latest price from this affiliate and to buy!'>";
        echo $affiliate_link->to_html();
        echo "</td>";

        if ( ! $affiliate_link->get_item_options()->is_null() ) {

          $item_options_html = $affiliate_link->get_item_options()->to_html();

          echo "<td class='item_options'>$item_options_html</td>";

        }
        else {

          echo "<td></td>";

        }

        if ( $affiliate_number === 1 ) {

          $notes_url = $equipment->get_sixsigma_url()->to_html();

          $notes_adjust = $count - $adjust - $other_adjust;

          if ( $notes_url ) :
    ?>
            <td colspan="1" rowspan="<?= $notes_adjust ?>" class="notes" style="vertical-align:top !important; text-align: center;"><a href="<?= $notes_url ?>" class="internal" title='Click through for notes about this equipment which I keep on my personal wiki'>notes</a></td>
<?php
          else :
    ?>
            <td colspan="1" rowspan="<?= $notes_adjust ?>" class="notes"></td>
<?php
          endif;

        }

        echo "</tr>\n";

      }

?>
    <tr>
      <td colspan="7">
<?php

      $warning_list = $equipment->get_warning_list();

      if ( $warning_list ) {
?>
        <p>Warning:</p>
        <ul>
<?php

        foreach ( $warning_list as $warning ) {

          $text_html = $warning->to_html();

?>
          <li class="warning"><?= $text_html ?></li>
<?php


        }

?>
        </ul>
<?php

      }

      $see_also_list = $equipment->get_see_also_list();

      if ( $see_also_list ) {
?>
        <p>See also:</p>
        <ul>
<?php

        foreach ( $see_also_list as $see_also ) {

          $text_html = $see_also->to_html();
          $id_html = str_replace( ' ', '-', $text_html );
?>
          <li><a href="#<?= $id_html ?>" class="internal"><?= $text_html ?></a></li>
<?php


        }

?>
        </ul>
<?php

      }

      $web_link_list = $equipment->get_web_link_list();

      // 2024-01-18 jj5 - I'm gonna leave this out for now, less is more.
      //$web_link_list[] = $equipment->get_search_link();

      if ( $web_link_list ) {
?>
        <p>Links:</p>
        <ul>
<?php

        foreach ( $web_link_list as $link ) {

          $link_html = $link->to_html();

 ?>
          <li><?= $link_html ?></li>
<?php

        }

?>
        </ul>
<?php

      }

      $link_list = $equipment->get_equipment_info()->get_manufacturer_link_list();

      if ( $link_list ) {
?>
        <p>Manufacturer links:</p>
        <ul>
<?php

        foreach ( $link_list as $link ) {

          $link_html = $link->to_html();

 ?>
          <li><?= $link_html ?></li>
<?php

        }

?>
        </ul>
<?php

      }

?>
</td>
    </tr>
<?php

    if ( $purchase_list ) :
?>
    <tr style="height:2rem">
      <th>Vendor</th>
      <th>Unit Price</th>
      <th title="This includes shipping costs and tax less discounts">Ancillary Charges</th>
      <th>Purchase History (The specific things I purchased)</th>
      <th>Option(s)</th>
      <th>Notes</th>
    </tr>
<?php

      foreach ( $purchase_list as $purchase ) {

        $vendor_html = henc( $purchase->get_vendor() );

        $quantity = $purchase->get_order_quantity();
        $quantity_html = $quantity->to_html();

        $price = $purchase->get_order_price();
        $price_html = $price->to_html();

        $subtotal = $price->multiply( $quantity->get_value() );
        $subtotal_html = $subtotal->to_html();

        $date = $purchase->get_order_date();
        $date_html = $date->to_html();

        $shipping = $purchase->get_order_shipping();
        $shipping_html = $shipping->to_html();

        $tax = $purchase->get_order_tax();
        $tax_html = $tax->to_html();

        $discount = $purchase->get_order_discount();
        $discount_html = $discount->to_html();

        $ancillary_charges = null;

        if ( ! $shipping->is_null() ) {

          $ancillary_charges = $shipping->add( $tax )->subtract( $discount );

        }
        elseif ( ! $tax->is_null() ) {

          $ancillary_charges = $tax->subtract( $discount );

        }
        elseif ( ! $discount->is_null() ) {

          $ancillary_charges = $discount->invert();

        }

        $ancillary_charges_html = $ancillary_charges ? $ancillary_charges->to_html() : '';

        $total = $subtotal->add( $ancillary_charges );
        $total_html = $total->to_html();

        $number = $quantity->get_value();

        $number_html = henc( NUMBER_MAP[ $number ] ?? $number );

        $options_html = $purchase->get_order_options()->to_html();

        $href = '#' . $purchase->get_parent()->get_equipment_id();

        $vendor_url = $purchase->get_vendor_url();

        if ( ! $vendor_url->is_null() ) { $href = $vendor_url->to_html(); }

        $each = $number === 1 ? '' : 'each';
        $plus = $shipping->get_value() > 0 ? 'and' : 'plus';

        $order_url_html = $purchase->get_order_url()->to_html();
        $order_id_html = $purchase->get_order_id()->to_html();

        $order_item_name_html = $purchase->get_order_item_name()->to_html();

?>
        <tr style="height:2rem">
          <td class="vendor"><?= $vendor_html ?>:</td>
          <td class="subtotal price"><?= $subtotal_html ?></td>
          <td class="ancillary price"><?= $ancillary_charges_html ?></td>
          <td>I purchased
            <a href="<?= $href ?>" target="_blank" title="<?= $order_item_name_html ?>" class="external"><?= $number_html ?> of these</a>
            on <?= $date_html ?> for
            <?= $price_html ?> <?= $each ?>
<?php if ( $shipping->get_value() > 0 ) : ?>
            plus shipping of <?= $shipping_html ?>
<?php else : ?>
            with free shipping
<?php endif; ?>
<?php if ( $tax->get_value() > 0 ) : ?>
            <?= $plus ?> tax of <?= $tax_html ?>
<?php endif; ?>
<?php if ( $discount->get_value() > 0 ) : ?>
            and a discount of <?= $discount_html ?>
<?php endif; ?>
            for a total of <?= $total_html ?>.
<?php if ( is_dev() ) : ?>
            Order: <a href="<?= $order_url_html ?>" class="external" target='_blank'><?= $order_id_html ?></a>
<?php endif; ?>
          </td>
          <td><?= $options_html ?></td>
          <td></td>
        </tr>
<?php

      }

    endif;

  }
?>
<?php
?>
  </tbody>
</table>
<?php

}
