<?php

if ( ! defined( 'DEBUG' ) ) {
if ( true ) {
define( 'DEBUG', true );
define( 'DEV', DEBUG );
define( 'BETA', ! DEBUG );
define( 'PROD', ! DEBUG );
}
else {
define( 'DEBUG', false );
define( 'DEV', DEBUG );
define( 'BETA', DEBUG );
define( 'PROD', ! DEBUG );
}
}

