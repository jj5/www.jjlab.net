<?php

require_once __DIR__ . '/view/milligram.php';
//require_once __DIR__ . '/view/initial.php';

function render_maxitronix_kit_list() {

  $list = app_stash()->get_list( MaxitronixKit::class );

  tag_open( 'ul' );

    foreach ( $list as $kit ) {

      tag_open( 'li' );

        tag_text(
          'a',
           $kit->get_name(),
           [
              'href' => url_base() . '/feature.php/maxitronix-' . $kit->get_name(),
              'class' => 'internal',
              'title' => $kit->get_title(),
           ]
        );

      tag_shut( 'li' );

    }

  tag_shut( 'ul' );

}
