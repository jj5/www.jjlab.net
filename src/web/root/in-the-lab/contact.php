<?php

require_once __DIR__ . '/../../../../inc/framework.php';

function render() {

  $path_info = $_SERVER[ 'PATH_INFO' ] ?? null;

  switch ( $path_info ) {

    case '' :

      return render_contact_main();

    default :

      return default_redirect( url_base() . '/contact.php' );

  }
}

function render_contact_main() {

  $title = 'Contact Information';

  render_head( $title );

    tag_open( 'header', [ 'id' => 'home', 'class' => 'header' ] );

      tag_open( 'section' );

        tag_bare( 'img', [ 'src' => LOGO_URL ] );

        tag_text( 'h1', $title );
        
        tag_text( 'p', 'Please find my contact information below.' );

      tag_shut( 'section' );

    tag_shut( 'header' );

    render_section_contents();

    render_section_contact_info();

  render_foot();

}
