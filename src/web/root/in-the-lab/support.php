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

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Support The Show!" );
        
        tag_text( 'p', 'Super big shout out to all the people who have supported the show!' );

        tag_text( 'p', 'Thinking of joining their ranks? Below are a few ideas for how you can support me as well!' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    // 2024-07-03 jj5 - OLD: there's not enough content on this page to warrant a section_contents block.
    //render_section_contents();

    $heading_level = 2;

    tag_open( 'section' );

      tag_text( 'h' . $heading_level, 'Sponsor On Patreon', [ 'id' => 'sponsor-on-patreon' ] );

      tag_text( 'p', 'If you can send me a few dollars a month via Patreon that would really help me to continue making content for the show:' );

      tag_open( 'p', [ 'class' => 'indent' ] );

        tag_text(
          'a',
          'patreon.com/JohnElliotV',
          [
            'href' => 'https://www.patreon.com/JohnElliotV',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => TITLE_PATREON,
          ]
        );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h' . $heading_level, 'Subscribe on YouTube', [ 'id' => 'subscribe-on-youtube' ] );

      tag_text( 'p', 'Another way to support the channel is to subscribe to the main YouTube channel:' );

      tag_open( 'p', [ 'class' => 'indent' ] );

        tag_text(
          'a',
          'youtube.com/@InTheLabWithJayJay',
          [
            'href' => 'https://www.youtube.com/@InTheLabWithJayJay',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => TITLE_YOUTUBE_MAIN,
          ]
        );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h' . $heading_level, 'Click Like or Comment on YouTube Videos', [ 'id' => 'like-or-comment' ] );

      tag_text( 'p', "It's always nice to get some positive feedback and your likes help me (and YouTube!) know what people consider quality content." );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h' . $heading_level, 'Click Through On Affiliate Links', [ 'id' => 'click-affiliate-links' ] );

      tag_open( 'p' );

        out_text( "A great way to support the show at no cost to you is to click-through on any of the green affiliate links on my " );

        tag_text(
          'a',
          'equipment',
          [
            'href' => url_base() . '/equipment.php',
            'class' => 'internal',
            'rel' => 'follow',
            'title' => TITLE_EQUIPMENT,
          ]
        );

        out_text( " page before shopping at Amazon, eBay, or AliExpress." );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h' . $heading_level, 'Make a Custom Sponsorship Deal', [ 'id' => 'sponsor-me' ] );

      tag_open( 'p' );

        out_text( "As detailed on my " );

        tag_text(
          'a',
          'sponsors',
          [
            'href' => url_base() . '/sponsor.php',
            'class' => 'internal',
            'rel' => 'follow',
            'title' => TITLE_SPONSOR,
          ]
        );

        out_text( " page my friends at " );

        tag_text(
          'a',
          'PCBWay',
          [
            'href' => 'https://www.pcbway.com/',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => TITLE_PCBWAY,
          ]
        );

        out_text( " send me free stuff in exchange for a mention in my videos, and my friends at " );

        tag_text(
          'a',
          'Silicon Chip',
          [
            'href' => 'https://www.siliconchip.com.au/',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => TITLE_SILICON_CHIP,
          ]
        );

        out_text( "give me free advertising in the back of their magazine because they are awesome. " );
        out_text( "If you have quality products or services of interest to the electronics hobbyist that wouldn't " );
        out_text( " embarrass me to promote, " );

        tag_text(
          'a',
          "let's talk",
          [
            'href' => url_base() . '/#contact-info',
            'class' => 'internal',
            'title' => TITLE_CONTACT,
          ]
        );

        out_text( '.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( 'h' . $heading_level, 'Tell Your Friends!', [ 'id' => 'tell-friends' ] );

      tag_open( 'p' );

        out_text( 'Letting other people who might be interested in the show know about it is a great way to support the show!' );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( 'You can use the short link ' );

        tag_text(
          'a',
          'jjlab.net',
          [
            'href' => 'https://jjlab.net',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => "jjlab.net",
          ]
        );

        out_text( ' or the longer link ' );

        tag_text(
          'a',
          'InTheLabWithJayJay.com',
          [
            'href' => 'https://www.inthelabwithjayjay.com/',
            'class' => 'external',
            'target' => '_blank',
            'rel' => 'noopener follow',
            'title' => "InTheLabWithJayJay.com",
          ]
        );

        out_text( '.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

  render_foot();

}
