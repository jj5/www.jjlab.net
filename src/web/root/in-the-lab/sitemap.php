<?php

// 2024-06-29 jj5 - SEE: https://sitemaps.org/protocol.html

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  if ( $path_info === null ) { return render_sitemap(); }

  return default_redirect( url_base() . '/sitemap.php' );

}

function render_sitemap() {

  header( 'Content-Type: text/xml; charset=utf-8' );

  doc_init(
    MUD_DOCTYPE_XML,
    MUD_HTML_DEFAULT_LANG,
    MUD_HTML_DEFAULT_CHARSET,
    MUD_CONTENT_TYPE_XML,
  );

  global $domain;

  //$version = get_resource_version();

  if ( is_prod() ) {

    // 2024-08-13 jj5 - NEW:
    $sitemap_xsl = 'https://www.inthelabwithjayjay.com/in-the-lab/sitemap.xsl.php';
    // 2024-08-13 jj5 - OLD:
    //$sitemap_xsl = "https://www.inthelabwithjayjay.com/in-the-lab/sitemap.xsl.php?v=$version";

    $domain = 'https://www.inthelabwithjayjay.com';

  }
  else {

    // 2024-08-13 jj5 - NEW:
    $sitemap_xsl = url_base() . '/sitemap.xsl.php';
    // 2024-08-13 jj5 - OLD:
    //$sitemap_xsl = url_base() . '/sitemap.xsl.php?v=' . date( 'Y-m-d-His' );

    $domain = 'http://localhost';

  }

  out_html( "<?xml-stylesheet href=\"$sitemap_xsl\" type=\"text/xsl\"?>" );

  $latest_video = app_stash()->get_live_video_list()[ 0 ];
  $latest_video_date = $latest_video->get_publication_date()->format_for_sitemap();
  $latest_software_date = get_version_date();
  $latest_date = get_latest_date_for_sitemap( $latest_software_date, $latest_video_date );

  tag_open(
    'urlset',
    [
      'xmlns' => 'http://www.sitemaps.org/schemas/sitemap/0.9',
      'xmlns:jjlab' => "https://www.jjlab.net/schema/sitemap/0.1",
    ]
  );

    //
    // 2024-06-29 jj5 - home page
    //

    $changefreq = 'hourly';
    $priority = '1.0';

    render_url( '/', $latest_date, $changefreq, $priority );

    $pages = [ 'videos.php', 'books.php' ];

    render_pages( $pages, $latest_date, $changefreq, $priority );

    //
    // 2024-07-03 jj5 - shows. these are prioritized based on their age...
    //

    foreach ( app_stash()->get_live_video_list() as $video ) {

      render_page(
        'show.php',
        '/' . $video->get_channel()->get_slug() . '/' . $video->get_slug(),
        $video->get_publication_date()->format_for_sitemap(),
        $video->get_changefreq()->value,
        $video->get_priority(),
      );

    }

    //
    // 2024-06-29 jj5 - regular content pages
    //

    $changefreq = 'daily';
    $priority = '0.8';

    $pages = [
      'about.php',
      'affiliate.php',
      'contact.php',
      'homies.php',
      'secret.php',
      'sponsor.php',
      'stats.php',
      'support.php',
      'youtube-hacks.php',
    ];

    render_pages( $pages, $latest_software_date, $changefreq, $priority );

    //
    // 2024-07-03 jj5 - important category pages
    //

    $changefreq = 'weekly';
    $priority = '0.7';
    $pages = [ 'channel.php', 'show-type.php', 'feature.php' ];

    render_pages( $pages, $latest_date, $changefreq, $priority );

    //
    // 2024-06-29 jj5 - important category pages
    //

    $changefreq = 'weekly';
    $priority = '0.7';
    $pages = [ 'equipment.php', 'manufacturer.php', 'category.php' ];

    render_pages( $pages, $latest_software_date, $changefreq, $priority );

    //
    // 2024-06-29 jj5 - subcategory pages
    //

    $changefreq = 'weekly';
    $priority = '0.6';

    foreach ( app_stash()->get_list( Channel::class ) as $channel ) {

      render_page( 'channel.php', '/' . $channel->get_slug(), $latest_date, $changefreq, $priority );

    }

    foreach ( app_stash()->get_list( ShowType::class ) as $show_type ) {

      render_page( 'show-type.php', '/' . $show_type->get_slug(), $latest_date, $changefreq, $priority );

    }

    foreach ( app_stash()->get_list( Feature::class ) as $feature ) {

      render_page( 'feature.php', '/' . $feature->get_slug(), $latest_date, $changefreq, $priority );

    }

    get_manufacturer_map( $manufacturer_list );

    foreach ( $manufacturer_list as $manufacturer ) {

      render_page( 'manufacturer.php', '/' . $manufacturer->get_manufacturer_id(), $latest_date, $changefreq, $priority );

    }

    get_category_map( $category_list );

    foreach ( $category_list as $category ) {

      render_page( 'category.php', '/' . $category->get_category_id(), $latest_date, $changefreq, $priority );

    }

    //
    // 2024-06-29 jj5 - less important pages
    //

    $changefreq = 'weekly';
    $priority = '0.4';

    //
    // 2024-06-29 jj5 - supplementary pages
    //

    $changefreq = 'weekly';
    $priority = '0.3';

    //
    // 2024-06-29 jj5 - deprecated or low value pages
    //

    $changefreq = 'monthly';
    $priority = '0.0';

    //
    // 2024-07-03 jj5 - final pages
    //

    // 2024-07-03 jj5 - NOTE: this is still high priority but I put it out last because it's not HTML content...

    render_page( 'feed.php', '', $latest_date, 'hourly', '1.0' );
    render_page( 'sitemap.php', '', $latest_date, 'hourly', '1.0' );


  tag_shut( 'urlset' );

}

function render_pages( $pages, $lastmod = null, $changefreq = null, $priority = null ) {

  foreach ( $pages as $page ) {

    render_page( $page, '', $lastmod, $changefreq, $priority );

  }
}

function render_page( $page, $path, $lastmod = null, $changefreq = null, $priority = null ) {

  render_url( "/{$page}{$path}", $lastmod, $changefreq, $priority );

}

function get_page_date( $path ) {

  $file = __DIR__ . "/$path";

  if ( ! file_exists( $file ) ) { return null; }

  return gmdate( DATE_FORMAT_FOR_SITEMAP, filemtime( $file ) );

}

function render_url( $loc, $lastmod = null, $changefreq = null, $priority = null ) {

  global $domain;

  tag_open( 'url' );

    // 2024-08-13 jj5 - NEW:
    tag_text( 'loc', "$domain/in-the-lab" . $loc );
    // 2024-08-13 jj5 - OLD:
    //tag_text( 'loc', $domain . url_base() . $loc );

    if ( $lastmod ) {

      tag_text( 'lastmod', $lastmod );

    }

    if ( $changefreq ) {

      tag_text( 'changefreq', $changefreq );

      tag_open( 'jjlab:changefreq_sort_value' );

        out_text( get_data_sort_value_for_changefreq( $changefreq ) );

      tag_shut( 'jjlab:changefreq_sort_value' );

    }

    if ( $priority ) {

      tag_text( 'priority', $priority );

    }

  tag_shut( 'url' );

}

function get_latest_date_for_sitemap( $version_date, $latest_video_date ) {

  $version_datetime = new DateTime( $version_date );
  $latest_datetime = new DateTime( $latest_video_date );

  if ( $version_datetime > $latest_datetime ) {

    return $version_date;

  }

  return $latest_video_date;

}
