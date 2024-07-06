<?php

// 2024-07-06 jj5 - the important thing that happens in this script is that the _PATCH number is incremented by 2,
// the rest of it doesn't matter much...

// 2024-07-06 jj5 - NOTE: odd PATCH numbers indicate development versions, even PATCH numbers indicate release versions...
// This script just increments by two, keeping the PATCH number odd... a release script will increment by one before
// release and then by one after release.

define( 'APP_VERSION_FILE', 'inc/version.php' );

function main( $argv ) {

  $const_prefix_regex = '/\'([^_]+)_VERSION_MAJOR\', ([0-9]+)/';
  $patch_regex = '/_PATCH\', ([0-9]+)/';
  $date_regex = '/Date: ([^ ]+) ([^ ]+) ([^ ]+) ([^)]+\))/';
  $revision_regex = '/Revision: ([^ ]+)/';
  $author_regex = '/Author: ([^ ]+)/';
  $git_date_regex = '/_GIT_DATE\', \'([^\']+)\'/';

  $const_prefix = null;

  //$commit_hash = trim( `git rev-parse HEAD` );
  $commit_hash_short = trim( `git rev-parse --short HEAD` );

  $new_date = date( 'Y-m-d H:i:s O (D, d M Y)' );

  $date = 'Date: ' . $new_date;

  // 2024-07-06 jj5 - this essentially writes a random number into the revision, which is fine for now...
  //
  $revision = 'Revision: ' . hexdec( $commit_hash_short );

  $author = 'Author: ' . get_current_user();

  $lines = file( APP_VERSION_FILE );

  $result = [];

  $found_git_date = false;

  for ( $i = 0; $i < count( $lines ); $i++ ) {

    $line = $lines[ $i ];
    $trim_line = trim( $line );

    if ( strpos( $line, '<?php' ) === 0 ) {

      $result[] = $line;
      $result[] = "// these version numbers are managed by bin/dev/version.sh...\n";

      continue;

    }

    if ( strlen( $trim_line ) === 0 ) {

      // 2024-07-06 jj5 - ignore blank lines...
      
      continue;

    }

    if ( strpos( $trim_line, '//' ) === 0 ) {

      // 2024-07-06 jj5 - ignore comments...

      continue;

    }

    if ( preg_match( $const_prefix_regex, $line, $matches ) ) {

      $const_prefix = $matches[ 1 ];

      $result[] = $line;

      continue;

    }
    elseif ( preg_match( $patch_regex, $line, $matches ) ) {

      $patch = $matches[ 1 ] + 2;

      if ( $patch % 2 !== 1 ) {

        echo "Warning: patch number is not odd: $patch\n";

        exit( 1 );

      }

      $result[] = preg_replace( $patch_regex, '_PATCH\', ' . $patch, $line );

    }
    elseif ( preg_match( $date_regex, $line, $matches ) ) {

      $result[] = preg_replace( $date_regex, $date, $line );

    }
    elseif ( preg_match( $revision_regex, $line, $matches ) ) {

      $result[] = preg_replace( $revision_regex, $revision, $line );

    }
    elseif ( preg_match( $author_regex, $line, $matches ) ) {

      $result[] = preg_replace( $author_regex, $author, $line );

    }
    elseif ( preg_match( $git_date_regex, $line, $matches ) ) {

      $found_git_date = true;

      $result[] = preg_replace( $git_date_regex, '_GIT_DATE\', \'' . $new_date . '\'', $line );

    }
    else {

      $result[] = $line;

    }
  }

  if ( ! $found_git_date ) {

    $result[] = "\n";
    $result[] = "define( '{$const_prefix}_GIT_DATE', '$new_date' );\n";

  }

  $text = implode( '', $result );

  file_put_contents( APP_VERSION_FILE, $text );

}

main( $argv );
