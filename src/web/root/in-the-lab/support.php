<?php

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_support_main();

    default :

      return default_redirect( url_base() . '/support.php#heading' );

  }
}

function render_support_main() {

  render_head( 'Support the Show!' );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', "Support the Show!" );

        tag_text( 'p', 'Super big shout out to all the people who have supported the show!' );

        tag_text( 'p', 'Thinking of joining their ranks? Below are a few ideas for how you can support me as well!' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    $heading_level = 2;

    tag_open( 'section' );

      tag_text( "h{$heading_level}", 'Sponsor on Patreon!', [ 'id' => 'sponsor-on-patreon' ] );

      tag_text( 'p', 'If you can send me a few dollars a month via Patreon that would really help me to continue making content for the show:' );

      tag_open( 'p', [ 'class' => 'indent' ] );

        render_link_external(
          'patreon.com/JohnElliotV',
          'https://www.patreon.com/JohnElliotV',
          TITLE_PATREON,
        );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( "h{$heading_level}", 'Click Through on Affiliate Links!', [ 'id' => 'click-affiliate-links' ] );

      tag_open( 'p' );

        out_text( "A great way to support the show at no cost to you is to click through on any of the green affiliate links on my " );

        render_link_internal(
          'equipment',
          url_base() . '/equipment.php#heading',
          TITLE_EQUIPMENT,
        );

        out_text( " page before shopping at Amazon, eBay, or AliExpress. Even if you buy something other than the product " );
        out_text( "I linked to I may still get a small commission. It's a great way to support the show without spending any extra money." );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( "h{$heading_level}", 'Subscribe on YouTube!', [ 'id' => 'subscribe-on-youtube' ] );

      tag_text( 'p', 'Another way to support the channel is to subscribe to the main YouTube channel:' );

      tag_open( 'p', [ 'class' => 'indent' ] );

        render_link_external(
          'youtube.com/@InTheLabWithJayJay',
          'https://www.youtube.com/@InTheLabWithJayJay',
          TITLE_YOUTUBE_MAIN,
        );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( "h{$heading_level}", 'Click Like or Comment on YouTube Videos!', [ 'id' => 'like-or-comment' ] );

      tag_text( 'p', "It's always nice to get some positive feedback and your likes help me (and YouTube!) know what people consider quality content." );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( "h{$heading_level}", 'Make a Custom Sponsorship Deal!', [ 'id' => 'sponsor-me' ] );

      tag_open( 'p' );

        out_text( "As detailed on my " );

        render_link_internal(
          'sponsors',
          url_base() . '/sponsor.php#heading',
          TITLE_SPONSOR,
        );

        out_text( " page my friends at " );

        render_link_external(
          'PCBWay',
          'https://www.pcbway.com/',
          TITLE_PCBWAY,
        );

        out_text( " send me free stuff in exchange for a mention in my videos, and my friends at " );

        render_link_external(
          'Silicon Chip',
          'https://www.siliconchip.com.au/',
          TITLE_SILICON_CHIP,
        );

        out_text( " give me free advertising in the back of their magazine because they are awesome. " );
        out_text( "If you have quality products or services of interest to the electronics hobbyist that it wouldn't " );
        out_text( " embarrass me to promote, " );

        render_link_internal(
          "let's talk",
          url_base() . '/contact.php#heading',
          TITLE_CONTACT,
        );

        out_text( '.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( "h{$heading_level}", 'Tell Your Friends!', [ 'id' => 'tell-friends' ] );

      tag_open( 'p' );

        out_text( 'Letting other people who might be interested in the show know about it is a great way to support the show!' );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( 'You can use the short link: ' );

        render_link_external(
          'jjlab.net',
          'https://jjlab.net',
          "jjlab.net",
        );

        out_text( ' or the longer link: ' );

        render_link_external(
          'InTheLabWithJayJay.com',
          'https://www.inthelabwithjayjay.com/',
          "InTheLabWithJayJay.com",
        );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( 'Or you could refer people directly to YouTube: ' );

        render_link_external(
          'youtube.com/@InTheLabWithJayJay',
          'https://www.youtube.com/@InTheLabWithJayJay',
          TITLE_YOUTUBE_MAIN,
        );

        out_text( ' or to my blog: ' );

        render_link_external(
          'blog.jj5.net',
          'https://blog.jj5.net/',
          TITLE_BLOG,
        );

      tag_shut( 'p' );

      tag_open( 'p' );

        out_text( 'Or, perhaps best of all, you could refer people to Patreon: ' );

        render_link_external(
          'patreon.com/JohnElliotV',
          'https://www.patreon.com/JohnElliotV',
          TITLE_PATREON,
        );

      tag_shut( 'p' );

    tag_shut( 'section' );

    tag_open( 'section' );

      tag_text( "h{$heading_level}", 'Be Interested and Enthusiastic About Electronics!', [ 'id' => 'be-interested' ] );

      tag_open( 'p' );

        out_text( 'Just taking an interest in electronics and being enthusiastic about electronics content is something ' );
        out_text( 'that strengthens our community and promotes our cause. ' );
        out_text( 'When our community succeeds we can succeed too.' );

      tag_shut( 'p' );

    tag_shut( 'section' );

    render_section_about_next();

  render_foot();

}
