<?php
require_once __DIR__ . '/../../../../run/run-web.php';
function app_render() { render_xslt_headers(); }
?>
<xsl:stylesheet
  version="3.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:s="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:jjlab="https://www.jjlab.net/schema/sitemap/0.1"
>
    <xsl:output method="html" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
<xsl:text disable-output-escaping='yes'>&lt;!DOCTYPE html&gt;</xsl:text>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="xslt sitemap">
	<head>
		<title>Sitemap</title>

<script>
var MUD_SERVER_VERSION = <?= json_encode( MUDBALL_VERSION ) ?>;
var APP_SERVER_VERSION = <?= json_encode( JJLAB_VERSION ) ?>;
var IS_JOHN = <?= json_encode( is_john() ) ?>;
var URL_BASE = <?= json_encode( url_base() ) ?>;
var DEBUG = <?= json_encode( DEBUG ) ?>;
</script>

<style>
.sortable th {

  cursor: pointer;

}
</style>

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
        <h1>Sitemap</h1>
        <table class="table sortable">
          <thead>
            <tr>
              <th>#</th>
              <th>Last Modified</th>
              <th>Changes</th>
              <th>Priority</th>
              <th>URL</th>
            </tr>
          </thead>
          <tbody>
            <xsl:for-each select="s:urlset/s:url">
              <tr>
                <td><xsl:number value="position()"/></td>
                <td><xsl:value-of select="s:lastmod"/></td>
                <td data-sort-value="{jjlab:changefreq_sort_value}">
                  <xsl:value-of select="s:changefreq"/>
                </td>
                <td><xsl:value-of select="s:priority"/></td>
                <td><a href="{s:loc}"><xsl:value-of select="s:loc"/></a></td>
              </tr>
            </xsl:for-each>
          </tbody>
        </table>
      </section>
    </main>
		<footer>
			<div>© Copyright 2024 John Elliot V. All rights reserved.</div></footer>
		<script type="text/javascript">window.g_mud_html_options = {"autoxsrf":true,"max-length":32};</script>
  </body>
</html>

    </xsl:template>
</xsl:stylesheet>
