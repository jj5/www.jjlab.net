<?php

require_once __DIR__ . '/view/milligram.php';
//require_once __DIR__ . '/view/initial.php';

function render_maxitronix_kit_list() {

  $list = app_stash()->get_list( MaxitronixKit::class );

  tag_open( 'ul' );

    foreach ( $list as $kit ) {

      tag_open( 'li' );

        render_link_internal(
           $kit->get_name(),
           url_base() . '/feature.php/maxitronix-' . $kit->get_name() . '#heading',
           $kit->get_title(),
        );

      tag_shut( 'li' );

    }

  tag_shut( 'ul' );

}
