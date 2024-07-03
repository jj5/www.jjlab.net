<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_support_main();

    default :

      default_redirect( url_base() . '/support.php' );

  }
}

function render_support_main() {

  render_head( 'Support The Show!' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section', [ 'class' => 'container' ] );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Support The Show!" );
        
        tag_text( 'p', 'Super big shout out to all the people who have supported the show!' );

        tag_text( 'p', 'Thinking of joining their ranks? Below are a few ideas for how you can support me as well!' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    // 2024-07-03 jj5 - OLD: there's not enough content on this page to warrant a section_contents block.
    //render_section_contents();

?>
<section class="container">
  <h2>Sponsor on Patreon</h2>
  <p>If you can send me a few dollars a month via Patreon that would really help me to continue making content for the show:</p>
  <p class="indent"><a
        href="https://www.patreon.com/JohnElliotV"
        class="external"
        title="<?= henc( TITLE_PATREON ) ?>"
      >patreon.com/JohnElliotV</a></p>
</section>
<section class="container">
  <h2>Subscribe on YouTube</h2>
  <p>Another way to support the channel is to subscribe to the main YouTube channel:</p>
  <p class="indent"><a
        href="https://www.youtube.com/@InTheLabWithJayJay"
        class="external"
        title="<?= henc( TITLE_YOUTUBE_MAIN ) ?>"
      >youtube.com/@InTheLabWithJayJay</a></p>
</section>
<section class="container">
  <h2>Click Like or Comment on YouTube Videos</h2>
  <p>It's always nice to get some positive feedback and your likes help me (and YouTube!) know what people consider quality content.</p>
</section>
<section class="container">
  <h2>Click Through On Affiliate Links</h2>
  <p>A great way to support the show at no cost to you is to click-through on any of the green affiliate links
    on my <a
        href="<?= url_base() ?>/equipment.php"
        class="internal"
        title="<?= henc( TITLE_EQUIPMENT ) ?>"
      >equipment</a> page before shopping at Amazon, eBay, or AliExpress.</p>
</section>
<section class="container">
  <h2>Make a Custom Sponsorship Deal</h2>
  <p>As detailed on my <a
        href="<?= url_base() ?>/sponsor.php"
        class="internal"
        title="Click-through for information about my sponsors."
      >sponsors</a>
    page my friends at <a
        href="https://www.pcbway.com/"
        class="external"
        title="Click-through to buy from PCBWay!"
      >PCBWay</a> send me free stuff in exchange for a mention in my videos, and my friends at
      <a
        href="https://www.siliconchip.com.au/"
        class="external"
        title="Click-through to subscribe to Silicon Chip magazine!"
      >Silicon Chip</a> give me free advertising in the back of their magazine because they are awesome.
      If you have quality products or services of interest to the electronics hobbyist that wouldn't embarrass me
      to promote,
      <a
        href="<?= url_base() ?>/about.php"
        class="internal"
        title="Click-through to contact me."
      >let's talk</a>.
      </p>
</section>
<section class="container">
  <h2>Tell Your Friends!</h2>
  <p>Letting other people who might be interested in the show know about it is a great way to support the show!</p>
  <p>You can use the short link <a href="https://jjlab.net" class="internal">jjlab.net</a> or the longer link
  <a href="https://InTheLabWithJayJay.com" class="internal">InTheLabWithJayJay.com</a>.</p>
</section>
<?php
    
  render_foot();

}
