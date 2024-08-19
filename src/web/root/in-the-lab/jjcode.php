<?php

define( 'APP_USE_CACHE', false );

require_once __DIR__ . '/../../../../run/run-web.php';

function app_render() {

  render_head( 'JJCODE' );

    render_section_about_jjcode();

    render_section_about_next();

  render_foot();

}
