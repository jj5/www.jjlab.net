<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_equipment_main();

    default :

      default_redirect( url_base() . '/equipment-text.php' );

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

      tag_shut( 'section' );

    tag_shut( 'header' );

    tag_open( 'section', [ 'class' => 'container' ] );

?>
  <p>Let's go shopping!</p>

<?php

    tag_shut( 'section' );

    tag_open( 'section', [ 'class' => 'container' ] );

      render_equipment_text( $equipment_list );

    tag_shut( 'section' );

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
