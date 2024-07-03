<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="3.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title><xsl:value-of select="/rss/channel/title"/> RSS Feed</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
		<link rel="icon" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/logo.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
		<link rel="stylesheet" href="https://d27cckvuinr11o.cloudfront.net/global/table.css?v=2024-01-12-123831" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" />
		<link rel="stylesheet" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/res/style/main.css?v=2024-06-16-214523" />
		<link rel="stylesheet" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/res/style/milligram/print.css" media="print" />
		<script type="text/javascript">var DEBUG = false;</script>
		<script src="https://d27cckvuinr11o.cloudfront.net/global/default.js?v=2024-01-12-123831" type="text/javascript"></script>
		<script src="https://der3syffk4l6q.cloudfront.net/in-the-lab/res/script/common.js?v=2024-06-15-212624" type="text/javascript"></script>
		<link rel="preload" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner-base.jpg" as="image" />
		<link rel="preload" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner-0640.jpg" as="image" />
		<link rel="preload" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner.jpg" as="image" />
		<link rel="preload" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/logo.png" as="image" />
		<link rel="preload" href="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/rss/rss-40674_50.png" as="image" /></head>
	<body>
		<main class="wrapper">
			<nav class="navigation">
				<section class="container">
					<a href="/in-the-lab/" class="navigation-title" title="In The Lab With Jay Jay is the video blog of John Elliot V">
						<img src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/logo.png" />
						<h1 class="title">In The Lab With Jay Jay</h1></a>

					<ul class="navigation-list">
						<li class="navigation-item">
							<button class="hamburger" onclick="handle_hamburger_click( event, this )" title="Click here to access the website navigation.">
								<span class="bar"></span>
								<span class="bar"></span>
								<span class="bar"></span></button>
							<div id="popover-grid" class="popover">
								<ul class="popover-list">
									<li class="popover-item">
										<a href="/in-the-lab/" class="internal popover-link" title="Welcome!">Home</a></li>
									<li class="popover-item">
										<a href="/in-the-lab/channel.php/@InTheLabWithJayJay" class="internal popover-link" title="The main channel is @InTheLabWithJayJay.">Main Channel</a></li>
									<li class="popover-item">
										<a href="/in-the-lab/sponsor.php" class="internal popover-link" title="Super big shout out to our very generous sponsors!">Sponsors</a></li>
									<li class="popover-item">
										<a href="/in-the-lab/equipment.php" class="internal popover-link" title="See the lab equipment that I own along with affiliate links to buy.">Equipment</a></li>
									<li class="popover-item">
										<a href="/in-the-lab/about.php" class="internal popover-link" title="Find out more about the show including contact info.">About</a></li>
									<li class="popover-item">
										<a href="/in-the-lab/support.php" class="internal popover-link" title="See how you can support the show. Thanks for thinking of me!">Support The Show!</a></li>
									<li class="popover-item">
										<a class="internal popover-link" href="/in-the-lab/feed.php" title="Click here to subscribe to the full RSS feed which includes all videos.">
											<img src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/rss/rss-40674_50.png" style="display:inline-block;width:50px;height:auto;vertical-align:top;margin-top:0px;" alt="" /></a></li></ul></div></li></ul>

					<div class="menu-list">
						<a href="/in-the-lab/" class="internal" title="Welcome!">Home</a> | 
						<a href="/in-the-lab/channel.php/@InTheLabWithJayJay" class="internal" title="The main channel is @InTheLabWithJayJay.">Main Channel</a> | 
						<a href="/in-the-lab/sponsor.php" class="internal" title="Super big shout out to our very generous sponsors!">Sponsors</a> | 
						<a href="/in-the-lab/equipment.php" class="internal" title="See the lab equipment that I own along with affiliate links to buy.">Equipment</a> | 
						<a href="/in-the-lab/about.php" class="internal" title="Find out more about the show including contact info.">About</a> | 
						<a href="/in-the-lab/support.php" class="internal" title="See how you can support the show. Thanks for thinking of me!">Support The Show!</a>
						<a class="internal" href="/in-the-lab/feed.php" title="In The Lab With Jay Jay » Feed">
							<img src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/rss/rss-40674_50.png" style="display:inline-block;width:50px;height:auto;vertical-align:top;margin-top:0px;" /></a></div></section></nav>
			<header id="banner">
				<img class="rc-base" src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner-base.jpg" />
				<img class="rc-0320" src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner-base.jpg" />
				<img class="rc-0640" src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner-0640.jpg" />
				<img class="rc-1280" src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner.jpg" />
				<img class="rc-1920" src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/banner.jpg" /></header>
			<header id="home" class="header">
				<section class="container">
					<img src="https://der3syffk4l6q.cloudfront.net/in-the-lab/img/logo.png" />
					<h1>In The Lab With Jay Jay</h1>
					<p>Hi there! Welcome to my beginner-friendly video blog about electronics!</p>
        </section>
      </header>
      <section class="container">
        <h1>RSS Feed</h1>
        <p><xsl:value-of select="/rss/channel/title"/></p>
        <br />
        <h2>Recent Posts</h2>
        <xsl:for-each select="/rss/channel/item">
            <article>
                <strong>
                    <a hreflang="en" target="_blank">
                        <xsl:attribute name="href">
                            <xsl:value-of select="link"/>
                        </xsl:attribute>
                        <xsl:value-of select="title"/>
                    </a>
                </strong>
                <p>
                    Published:
                    <time>
                        <xsl:value-of select="pubDate" />
                    </time>
                </p>
            </article>
        </xsl:for-each>
      </section>
    </main>
		<footer>
			<div>© Copyright 2024 John Elliot V. All rights reserved.</div></footer>
		<script type="text/javascript">window.g_mud_html_options = {"autoxsrf":true,"max-length":32};</script>

  </body>
</html>

    </xsl:template>
</xsl:stylesheet>
