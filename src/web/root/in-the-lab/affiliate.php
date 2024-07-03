<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :
      
        return render_affiliate_main();

    default :

      return default_redirect( url_base() . '/affiliate.php' );

  }
}

function render_affiliate_main() {

  render_head( 'Affiliates' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Affiliates" );

        tag_open( 'p' );

          out_text( 'When possible ' );

          tag_text(
            'a',
            'equipment',
            [
              'href' => url_base() . '/equipment.php',
              'class' => 'internal',
              'title' => TITLE_EQUIPMENT,
            ]
          );

          out_text( " links are to affiliated vendors." );

        tag_shut( 'p' );

      tag_shut( 'section' );

    tag_shut( 'header' );

?>
<section class="container">

  <h2>Affiliated Vendors</h2>
  <p>Following is a list of my affiliates. When possible
    <a
      href="<?= url_base() ?>/equipment.php"
      class="internal"
      title="<?= henc( TITLE_EQUIPMENT ) ?>"
    >equipment</a>
    links are to affiliates. I may earn a small commission if you purchase after clicking-through on an
    affiliate link. Clicking-through on the green links on the 
    <a
      href="<?= url_base() ?>/equipment.php"
      class="internal"
      title="<?= henc( TITLE_EQUIPMENT ) ?>"
    >equipment</a> page
    is a great way to
    <a
      href="<?= url_base() ?>/support.php"
      class="internal"
      title="<?= henc( TITLE_SUPPORT ) ?>"
    >support the show</a>
    at no cost to you.</p>

<ul>
<?php

  foreach ( get_list( Affiliate::class ) as $affiliate ) {

    $text = $affiliate->get_affiliate_name()->to_string();
    $href = $affiliate->get_affiliate_url()->to_string();

    tag_open( 'li' );

      tag_text(
        'a',
        $text,
        [
          'href' => $href,
          'class' => 'external',
          'target' => '_blank',
          'rel' => 'noopener follow',
          'title' => TITLE_LINK_AFFILIATE,
        ]
      );

    tag_shut( 'li' );

  }
?>
</ul>
</section>
<?php

  render_foot();

}
