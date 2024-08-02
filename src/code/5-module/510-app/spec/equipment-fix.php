<?php

// 2024-08-03 jj5 - NOTE: I wrote this to convert double-quotes to single-quotes for strings in equipment.php.

function main( $argv ) {

  $regex_empty = '/(.*)(\( "" \))(.*)/';
  $regex_double = '/(.*)\( "(.*)" \)(.*)/';

  $lines = file( 'equipment-old.php' );

  foreach ( $lines as $line ) {

    $line = rtrim( $line );

    if ( preg_match( $regex_empty, $line, $matches ) ) {

      $line = $matches[ 1 ] . "( '' )" . $matches[ 3 ];

    }
    elseif ( preg_match( $regex_double, $line, $matches ) ) {

      $line = $matches[ 2 ];

      $text = fix_single( $matches[ 2 ] );

      $line = $matches[ 1 ] . ' ( \'' . $text . '\' )' . $matches[ 3 ];

    }

    echo $line . "\n";

  }
}

function fix_single( $text ) {

  static $regex = '/([^\\\\])\'/';

  while ( preg_match( $regex, $text ) ) {

    $text = preg_replace( $regex, '\1\\\'', $text );

  }

  return $text;

}

main( $argv );

