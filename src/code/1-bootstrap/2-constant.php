<?php

require_once __DIR__ . '/1-library.php';

require_once __DIR__ . '/../../../inc/version.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-07-06 jj5 - name and code...
//

// 2024-07-06 jj5 - changing the code is not supported, please don't change it...
//
//define( 'JJLAB_CODE', 'jjlab' );

// 2024-07-06 jj5 - you can change the name if you want...
//
//define( 'JJLAB_NAME', 'www.jjlab.net' );


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2023-11-05 jj5 - path info...
//

define( 'JJLAB_PATH', realpath( __DIR__ . '/../../../' ) );
define( 'JJLAB_CONFIG_FILE', 'config.php' );
define( 'JJLAB_CONFIG_PATH', JJLAB_PATH . '/' . JJLAB_CONFIG_FILE );

if ( file( JJLAB_CONFIG_PATH ) ) { require_once JJLAB_CONFIG_PATH; }


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-08-24 jj5 - maintainer info...
//

define( 'JJLAB_MAINTAINER_USERNAME',  'jj5'               );
define( 'JJLAB_MAINTAINER_EMAIL',     'jj5@progclub.org'  );
define( 'JJLAB_MAINTAINER_NAME',      'John Elliot V'     );
define(
  'JJLAB_MAINTAINER',
  JJLAB_MAINTAINER_NAME . ' <' . JJLAB_MAINTAINER_EMAIL . '>'
);

define(
  'JJLAB_PLEASE_INFORM',
  'please let the maintainer know: ' . JJLAB_MAINTAINER
);


/////////////////////////////////////////////////////////////////////////////////////////////////
// 2022-02-27 jj5 - schema info...
//

define( 'APP_SCHEMA', 'jjlabdb' );


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-06-29 jj5 - date formats...
//

define( 'DATE_FORMAT_FOR_WEB', 'r' );
define( 'DATE_FORMAT_FOR_SITEMAP', 'Y-m-d\TH:i:sP' );
