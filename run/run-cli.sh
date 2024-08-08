#!/bin/bash

set -euo pipefail;

#echo "${BASH_SOURCE[@]}";
#echo "${BASH_SOURCE[0]}";
#echo "${BASH_SOURCE[1]}";

if [[
  "$USER" == 'jj5' &&
  "$HOSTNAME" == 'charisma' && 
  -d /home/jj5/repo/git/github/jj5/kickass-libexec
]]; then

  source /home/jj5/repo/git/github/jj5/kickass-libexec/inc/run.sh

  exit $?;

fi;

# 2024-07-06 jj5 - this is the location of the libexec which ships with jjlab, but on 'charisma' I use a different one
#
default_libexec="$( realpath "$( dirname "${BASH_SOURCE[0]}" )/../ext/libexec" )";

if [[ -d "${default_libexec}" ]]; then

  source "${default_libexec}/inc/run.sh";

  exit $?;

fi;

LX_EXIT_FILE_MISSING=41;

echo "no libexec found." >&2;

exit $LX_EXIT_FILE_MISSING;
