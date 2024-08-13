<?php
require_once __DIR__ . '/../../../../run/run-web.php';
function app_render() { render_xslt_headers(); }
?>
<xsl:stylesheet version="3.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
<xsl:text disable-output-escaping='yes'>&lt;!DOCTYPE html&gt;</xsl:text>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="xslt feed">
	<head>
		<title><xsl:value-of select="/rss/channel/title"/> RSS Feed</title>

<script>
var MUD_SERVER_VERSION = <?= json_encode( MUDBALL_VERSION ) ?>;
var APP_SERVER_VERSION = <?= json_encode( JJLAB_VERSION ) ?>;
var IS_JOHN = <?= json_encode( is_john() ) ?>;
var URL_BASE = <?= json_encode( url_base() ) ?>;
var DEBUG = <?= json_encode( DEBUG ) ?>;
</script>

<?php
      render_xslt_head();
?>
  </head>
	<body>
		<main class="wrapper">
<?php
      render_xslt_nav_header();
?>
			<header id="home" class="header">
				<section class="container">
					<img src="<?= $cdn_base ?>/res/img.php/logo.png?v=<?= get_resource_version( 'logo.png' ) ?>" />
					<h1>In The Lab With Jay Jay</h1>
					<p>Hi there! Welcome to my beginner-friendly video blog about electronics!</p>
        </section>
      </header>
      <section class="container">
        <h1>RSS Feed</h1>
        <p><xsl:value-of select="/rss/channel/title"/></p>
        <br />
        <h2>Recent Posts</h2>
        <xsl:choose>
          <xsl:when test="count(/rss/channel/item)=0">
            <p>There are no posts for this content category yet. But stick around! :)</p>
          </xsl:when>
          <xsl:otherwise>
            <xsl:for-each select="/rss/channel/item">
                <article>
                    <strong>
                        <a hreflang="en">
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
          </xsl:otherwise>
        </xsl:choose>
      </section>
    </main>
		<footer>
			<div>© Copyright 2024 John Elliot V. All rights reserved.</div></footer>
		<script type="text/javascript">window.g_mud_html_options = {"autoxsrf":true,"max-length":32};</script>
  </body>
</html>

    </xsl:template>
</xsl:stylesheet>
