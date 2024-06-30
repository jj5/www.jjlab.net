<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_equipment_main();

    default :

      default_redirect( url_base() . '/equipment.php' );

  }
}

function verify_equipment( $equipment_list ) {

  $id_map = [];

  foreach ( $equipment_list as $equipment ) {

    $id = $equipment->get_equipment_id();

    if ( array_key_exists( $id, $id_map ) ) { throw new Exception( "Duplicate equipment ID: '$id'" ); }

    $id_map[ $id ] = true;

  }
}

function render_equipment_main() {

  $equipment_list = get_list( Equipment::class );

  verify_equipment( $equipment_list );

  $count = number_format( count( $equipment_list ) );

  render_head( 'Equipment' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', 'Equipment' );

        tag_text(
          'p',
          "Here is a list of $count products I use which may appear in my videos.",
        );

        tag_text( 'p', 'Click through on the green affiliate links to buy!' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

?>
<p>These products have affiliate links to vendors if you would like to buy.
  Clicking through on these affiliate links (in green) is a good way to support the channel at no cost to
  you.</p>
<p>Please be aware:</p>
<ul>
  <li>The links given here won't necessarily have the best price so please do shop around to
  see if you can find a better deal.</li>
  <li>Prices are indicative only and can and will go out of date; click-through for the latest
    price.</li>
  <li>Recent exchange rates are used for currency conversions, not the rates that were applicable
    at the time of record.</li>
  <li>Shipping costs and sales tax are not included in the prices listed here.</li>
  <li>Sometimes I can't find the exact product and in those circumstances a substitute product
    might be suggested.</li>
  <li>Sometimes a newer model has been released since I purchased the model I have, so keep
    your eye out for newer models.</li>
  <li>Sometimes after you click through on an affiliate link you need to make further choices
    for the type of product you actually want to buy; sometimes it's different colors or socket
    types, other times it's completely different products, so keep an eye out for that and make
    sure you understand what you've ordered before you click buy. I have made an effort to
    indicate when you need to make specific option choices on listings.</li>
  </ul>
  <p>You can also get this equipment listed by <a
    href="<?= url_base() ?>/category.php"
    class="internal"
    title="<?= henc( TITLE_LINK_CATEGORY ) ?>"
  >category</a> or by
  <a
    href="<?= url_base() ?>/manufacturer.php"
    class="internal"
    title="<?= henc( TITLE_LINK_MANUFACTURER ) ?>"
  >manufacturer</a>.</p>
  <p>If you have thoughts or questions please feel free to
    <a
      href="https://blog.jj5.net/blog/contact/"
      class="external"
      title="<?= henc( TITLE_CONTACT ) ?>"
      target="_blank"
    >let me know</a>.</p>
  <p>Let's go shopping!</p>

<?php

    tag_shut( 'section' );

    render_equipment( $equipment_list );

  render_foot();

}

function render_table_head() {
?>
    <tr>
      <th>Equipment</th>
      <th>Affiliate</th>
      <th>Price</th>
      <th>Shipping</th>
      <th>Total</th>
      <th>Affiliate Link</th>
      <th>Option(s)</th>
<?php
      if ( is_dev() ) :
?>
      <th>Search</th>
<?php
      endif;
?>
    </tr>
<?php

}
