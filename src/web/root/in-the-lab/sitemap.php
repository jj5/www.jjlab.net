<?php

// 2024-06-29 jj5 - SEE: https://sitemaps.org/protocol.html

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  if ( $path_info === null ) { return render_sitemap(); }

  return default_redirect( url_base() . '/sitemap.php' );

}

function render_sitemap() {

  $video_list = app_stash()->get_live_video_list();

  header( 'Content-Type: text/xml; charset=utf-8' );
  //header( 'Content-Disposition: inline' );

  doc_init(
    MUD_DOCTYPE_XML,
    MUD_HTML_DEFAULT_LANG,
    MUD_HTML_DEFAULT_CHARSET,
    MUD_CONTENT_TYPE_XML,
  );

  global $domain;

  $version = JJLAB_VERSION_MAJOR . '.' . JJLAB_VERSION_MINOR . '.' . JJLAB_VERSION_PATCH;

  if ( is_prod() ) {

    $sitemap_xsl = "https://www.inthelabwithjayjay.com/in-the-lab/sitemap.xsl.php?v=$version";
    $domain = 'https://www.inthelabwithjayjay.com';

  }
  else {

    $sitemap_xsl = url_base() . '/sitemap.xsl.php?v=' . date( 'Y-m-d-His' );
    $domain = 'http://localhost';

  }

  out_html( "<?xml-stylesheet href=\"$sitemap_xsl\" type=\"text/xsl\"?>" );

  $latest_video = app_stash()->get_live_video_list()[ 0 ];
  $latest_video_date = $latest_video->get_publication_date()->format_for_sitemap();
  $latest_software_date = get_version_date();
  $latest_date = get_latest_date_for_sitemap( $latest_software_date, $latest_video_date );

  tag_open( 'urlset', [ 'xmlns' => 'http://www.sitemaps.org/schemas/sitemap/0.9' ] );

    //
    // 2024-06-29 jj5 - home page
    //

    $changefreq = 'hourly';
    $priority = '1.0';

    render_url( '/', $latest_date, $changefreq, $priority );

    $pages = [ 'about.php', 'affiliate.php', 'sponsor.php', 'support.php' ];

    render_pages( $pages, $latest_software_date, $changefreq, $priority );

    //
    // 2024-06-29 jj5 - main category pages
    //

    $changefreq = 'daily';
    $priority = '0.9';
    $pages = [ 'equipment.php', 'channel.php', 'show-type.php', 'feature.php', 'videos.php', 'books.php' ];

    render_pages( $pages, $latest_date, $changefreq, $priority );

    //
    // 2024-06-29 jj5 - important content pages
    //

    $changefreq = 'daily';
    $priority = '0.7';
    $pages = [ 'manufacturer.php', 'category.php' ];

    render_pages( $pages, $latest_software_date, $changefreq, $priority );

    foreach ( app_stash()->get_live_video_list() as $video ) {

      render_url(
        '/show.php/' . $video->get_channel()->get_slug() . '/' . $video->get_slug(),
        $video->get_publication_date()->format_for_sitemap(),
        $changefreq,
        $priority
      );

    }

    //
    // 2024-06-29 jj5 - subcategory pages
    //

    $changefreq = 'daily';
    $priority = '0.6';

    foreach ( app_stash()->get_list( Channel::class ) as $channel ) {
        
      render_url( '/channel.php/' . $channel->get_slug(), $latest_date, $changefreq, $priority );

    }

    foreach ( app_stash()->get_list( ShowType::class ) as $show_type ) {
        
      render_url( '/show-type.php/' . $show_type->get_slug(), $latest_date, $changefreq, $priority );

    }

    foreach ( app_stash()->get_list( Feature::class ) as $feature ) {
        
      render_url( '/feature.php/' . $feature->get_slug(), $latest_date, $changefreq, $priority );

    }

    get_manufacturer_map( $manufacturer_list );

    foreach ( $manufacturer_list as $manufacturer ) {

      render_url( '/manufacturer.php/' . $manufacturer->get_manufacturer_id(), $latest_date, $changefreq, $priority );

    }

    get_category_map( $category_list );

    foreach ( $category_list as $category ) {

      render_url( '/category.php/' . $category->get_category_id(), $latest_date, $changefreq, $priority );

    }

    //
    // 2024-06-29 jj5 - regular content pages
    //

    $changefreq = 'daily';
    $priority = '0.5';

    //
    // 2024-06-29 jj5 - less important pages
    //

    $changefreq = 'weekly';
    $priority = '0.4';

    //
    // 2024-06-29 jj5 - supplmentary pages
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

    render_url( '/feed.php', $latest_date, 'hourly', '1.0' );


  tag_shut( 'urlset' );

}

function render_pages( $pages, $lastmod = null, $changefreq = null, $priority = null ) {

  foreach ( $pages as $page ) {

    render_url( "/$page", $lastmod, $changefreq, $priority );

  }
}

function render_url( $loc, $lastmod = null, $changefreq = null, $priority = null ) {

  global $domain;

  tag_open( 'url' );

    tag_text( 'loc', $domain . url_base() . $loc );

    if ( $lastmod ) {

      tag_text( 'lastmod', $lastmod );

    }

    if ( $changefreq ) {

      tag_text( 'changefreq', $changefreq );

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

function get_version_date() {

  static $result = null;
  static $datetime = null;
  static $utc = null;

  if ( $result ) { return $result; }

  if ( ! $utc ) { $utc = new DateTimeZone( 'UTC' ); }

  //'$Date: 2024-06-29 03:10:16 +1000 (Sat, 29 Jun 2024) $'

  if ( preg_match( '/(\d{4}-\d{2}-\d{2}) ([^ ]*) ([^ ]*)/', JJLAB_SVN_DATE, $matches ) ) {

    $date = $matches[ 1 ];
    $time = $matches[ 2 ];
    $zone = $matches[ 3 ];

    $datetime = new DateTime( $date . ' ' . $time . ' ' . $zone );

  }
  else {

    $datetime = new DateTime();

  }

  $datetime->setTimezone( $utc );

  $result = $datetime->format( DATE_FORMAT_FOR_SITEMAP );

  return $result;

}
