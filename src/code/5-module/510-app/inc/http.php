<?php

function http_redirect_home() {

  if ( DEBUG ) {

    var_dump( $_SERVER );

    exit;

  }

  return http_redirect( url_base() . '/' );

}

function default_redirect( $url ) {

  if ( DEBUG ) {

    while ( ob_get_level() ) { ob_end_clean(); }

    header( 'HTTP/1.0 404 Not Found', true, 404 );

    echo '404 Not Found: ' . $_SERVER[ 'REQUEST_URI' ];

    exit;

  }

  return http_redirect( $url );

}

function http_redirect( $url, $response_code = 302 ) {

  while ( ob_get_level() ) { ob_end_clean(); }
  header( "Location: $url", true, $response_code );
  exit();

}

function url_base( $use_cdn = false ) {

  if ( is_dev() ) { return '/in-the-lab'; }

  if ( $use_cdn ) { return 'https://der3syffk4l6q.cloudfront.net/in-the-lab'; }

  if ( is_prod() ) { return '/in-the-lab'; }

  return '/in-the-lab';

}

function render_one_year_expires_headers() {

  if ( is_prod() ) {

    $one_year = 365 * 24 * 60 * 60; // One year in seconds

    header( "Cache-Control: public, max-age=$one_year, immutable" );
    header( "Expires: " . gmdate( 'D, d M Y H:i:s', time() + $one_year ) . ' GMT' );

  }

  // 2024-07-03 jj5 - this is a reasonable place to do this:

  global $cdn_base, $url_base, $version;

  $cdn_base = url_base( $use_cdn = ! DEBUG );
  $url_base = url_base();
  $version = get_resource_version();

}

function render_image_headers( $extension ) {

  switch ( $extension ) {

    case 'png' :

      header( 'Content-Type: image/png' );

      break;

    case 'jpg' :
    case 'jpeg' :

      header( 'Content-Type: image/jpeg' );

      break;

    case 'webp' :

      header( 'Content-Type: image/webp' );

      break;

    case 'svg' :

      header( 'Content-Type: image/svg+xml' );

      break;

    default :

      mud_not_supported();

  }

  render_one_year_expires_headers();

}

function render_script_headers() {

  header( 'Content-Type: application/javascript; charset=UTF-8' );

  render_one_year_expires_headers();

}

function render_style_headers() {

  header( 'Content-Type: text/css; charset=UTF-8' );

  render_one_year_expires_headers();

}

function render_xslt_headers() {

  header( 'Content-Type: application/xslt+xml; charset=UTF-8' );

  render_one_year_expires_headers();

  echo '<?xml version="1.0" encoding="utf-8"?>' . "\n";

}

function render_xslt_head() {
  global $cdn_base, $url_base;
  $version = get_resource_version();
?>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
		<link rel="icon" href="<?= $cdn_base ?>/res/img.php/logo.png?v=<?= $version ?>" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />

		<link rel="stylesheet" href="<?= $cdn_base ?>/res/style.php/<?= $version ?>/style.css" />
		<script>var DEBUG = false;</script>
		<script src="<?= $cdn_base ?>/res/script.php/<?= $version ?>/script.js"></script>

		<link rel="preload" href="<?= $cdn_base ?>/res/img.php/banner-base.jpg?v=<?= $version ?>" as="image" />
		<link rel="preload" href="<?= $cdn_base ?>/res/img.php/banner-0640.jpg?v=<?= $version ?>" as="image" />
		<link rel="preload" href="<?= $cdn_base ?>/res/img.php/banner.jpg?v=<?= $version ?>" as="image" />
		<link rel="preload" href="<?= $cdn_base ?>/res/img.php/logo.png?v=<?= $version ?>" as="image" />
		<link rel="preload" href="<?= $cdn_base ?>/res/img.php/rss/rss-40674_50.png?v=<?= $version ?>" as="image" />
<?php
}
function render_xslt_nav_header() {
  global $cdn_base, $url_base;
  $version = get_resource_version();
?>
			<nav class="navigation">
				<div class="container">
					<a href="<?= $url_base ?>/" class="navigation-title" title="<?= TITLE_LOGO ?>">
						<img src="<?= $cdn_base ?>/res/img.php/logo.png?v=<?= $version ?>" alt="" />
						<header class="title">In The Lab With Jay Jay</header></a>
					<ul class="navigation-list">
						<li class="navigation-item">
							<button class="hamburger" onclick="handle_hamburger_click( event, this )" title="<?= TITLE_NAV_HAMBURGER ?>">
								<span class="bar"></span>
								<span class="bar"></span>
								<span class="bar"></span></button>
							<div id="popover-grid" class="popover">
								<ul class="popover-list">
									<li class="popover-item">
										<a href="<?= $url_base ?>/" class="internal popover-link" title="<?= TITLE_NAV_HOME ?>">Home</a></li>
									<li class="popover-item">
										<a href="<?= $url_base ?>/channel.php/@InTheLabWithJayJay" class="internal popover-link" title="<?= TITLE_NAV_MAIN ?>">Main Channel</a></li>
									<li class="popover-item">
										<a href="<?= $url_base ?>/sponsor.php" class="internal popover-link" title="<?= TITLE_NAV_SPONSORS ?>">Sponsors</a></li>
									<li class="popover-item">
										<a href="<?= $url_base ?>/equipment.php" class="internal popover-link" title="<?= TITLE_NAV_EQUIPMENT ?>">Equipment</a></li>
									<li class="popover-item">
										<a href="<?= $url_base ?>/about.php" class="internal popover-link" title="<?= TITLE_NAV_ABOUT ?>">About</a></li>
									<li class="popover-item">
										<a href="<?= $url_base ?>/support.php" class="internal popover-link" title="<?= TITLE_NAV_SUPPORT ?>">Support the Show!</a></li>
									<li class="popover-item">
										<a class="internal popover-link" href="<?= $url_base ?>/feed.php" title="<?= TITLE_NAV_FEED ?>">
											<img src="<?= $cdn_base ?>/res/img.php/rss/rss-40674_50.png?v=<?= $version ?>" style="display:inline-block;width:50px;height:auto;vertical-align:top;margin-top:0px;" alt="" /></a></li></ul></div></li></ul>
					<div class="menu-list">
						<a href="<?= $url_base ?>/" class="internal" title="<?= TITLE_NAV_HOME ?>">Home</a> | 
						<a href="<?= $url_base ?>/channel.php/@InTheLabWithJayJay" class="internal" title="<?= TITLE_NAV_MAIN ?>">Main Channel</a> | 
						<a href="<?= $url_base ?>/sponsor.php" class="internal" title="<?= TITLE_NAV_SPONSORS ?>">Sponsors</a> | 
						<a href="<?= $url_base ?>/equipment.php" class="internal" title="<?= TITLE_NAV_EQUIPMENT ?>">Equipment</a> | 
						<a href="<?= $url_base ?>/about.php" class="internal" title="<?= TITLE_NAV_ABOUT ?>">About</a> | 
						<a href="<?= $url_base ?>/support.php" class="internal" title="<?= TITLE_NAV_SUPPORT ?>">Support the Show!</a>
						<a class="internal" href="<?= $url_base ?>/feed.php" title="<?= TITLE_NAV_FEED ?>">
							<img src="<?= $cdn_base ?>/res/img.php/rss/rss-40674_50.png?v=<?= $version ?>" style="display:inline-block;width:50px;height:auto;vertical-align:top;margin-top:0px;" alt="" /></a></div></div></nav>
			<header id="banner">
				<img class="rc-base" src="<?= $cdn_base ?>/res/img.php/banner-base.jpg?v=<?= $version ?>" />
				<img class="rc-0320" src="<?= $cdn_base ?>/res/img.php/banner-base.jpg?v=<?= $version ?>" />
				<img class="rc-0640" src="<?= $cdn_base ?>/res/img.php/banner-0640.jpg?v=<?= $version ?>" />
				<img class="rc-1280" src="<?= $cdn_base ?>/res/img.php/banner.jpg?v=<?= $version ?>" />
				<img class="rc-1920" src="<?= $cdn_base ?>/res/img.php/banner.jpg?v=<?= $version ?>" /></header>
<?php
}