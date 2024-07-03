<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_about_main();

    default :

      return default_redirect( url_base() . '/about.php' );

  }
}

function render_about_main() {

  render_head( 'About The Show' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "About The Show" );
        
        tag_text( 'p', 'This website is for the video blog of John Elliot V who is affectionately known as Jay Jay.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_section_contact_info();

?>
<section>
  <h2 id="channels">Channels</h2>
  <p>The show is published across two YouTube channels:</p>
  <ul>
    <li>Main channel: <a
        href="https://www.youtube.com/@InTheLabWithJayJay"
        class="external"
        target="_blank"
        rel="noopener follow"
        title="<?= TITLE_CHANNEL_MAIN ?>"
      >youtube.com/@InTheLabWithJayJay</a></li>
    <li>2nd channel: <a
        href="https://www.youtube.com/@ElliotsExtras"
        class="external"
        target="_blank"
        rel="noopener follow"
        title="<?= TITLE_CHANNEL_MAIN ?>"
      >youtube.com/@ElliotsExtras</a></li>
  </ul>
</section>
<section>
  <h2 id="blog">Blog</h2>
  <p>I usually write up show notes on my blog, which is over here:
    <a
      href="https://blog.jj5.net/"
      class="external"
      target="_blank"
      rel="noopener follow"
      title="<?= TITLE_BLOG ?>"
    >https://blog.jj5.net/</a>
  </p>
</section>
<?php render_section_about_announcements(); ?>
<section>
  <h2 id="colophon">Colophon</h2>
  <p>The show's logo is a version of the
    <a
      href="http://www.catb.org/hacker-emblem/"
      class="external"
      target="_blank"
      rel="noopener follow"
      title="Click here to learn more about the hacker emblem."
    >Hacker Emblem</a>.
    As all good nerds will know the
    <a
      href="https://en.wikipedia.org/wiki/Glider_(Conway%27s_Game_of_Life)"
      class="external"
      target="_blank"
      rel="noopener follow"
      title="Click here to learn more about the glider in Conway's Game of Life."
    >glider</a>
    which Eric S. Raymond chose for the hacker emblem can be in any of four different states, so I picked an alternative
    state for the glider to be in for the show's logo.
  </p>
  <p>The source code for this website is now available on GitHub: <a
      href="https://github.com/jj5/www.jjlab.net"
      class="external"
      target="_blank"
      rel="noopener follow"
      title="Click here to read the source code for this website on GitHub."
    >https://github.com/jj5/www.jjlab.net</a></p>
  <p>This website has a sitemap.xml file which is <a
      href="<?= url_base() ?>/sitemap.php"
      class="internal"
      title="Click here to view the sitemap.xml file."
    >here</a>.</p>
</section>
<section>
  <h2 id="secret">Secret Links</h2>
  <p>Can you keep a secret? There are two handy pages I made for my own use. I don't advertise them because they use
    massive HTML tables and the pages aren't responsive (i.e. they don't look good on mobilde devices). But if you're
    brave you can find them here:</p>
  <ul>
    <li>
      <a
        href="videos.php"
        class="internal"
        title="Click here for a table with all videos."
      >Videos Index</a>
    </li>
    <li>
      <a
        href="books.php"
        class="internal"
        title="Click here for a table with all books."
      >Books Index</a>
    </li>
  </ul>
</section>
<section>
  <h2 id="thanks">Thanks!</h2>
  <p>Thanks for checking out the show! If you would like to help me out there are various ways you can
      <a
      href="support.php"
      class="internal"
      title="<?= TITLE_SUPPORT ?>"
    >support the show</a>.</p>
</section>
<?php
    
  render_foot();

}
