#!/bin/bash

set -euo pipefail;

jjlab_load_libexec_and_run() {

  #echo "${BASH_SOURCE[@]}";
  #echo "${BASH_SOURCE[0]}";
  #echo "${BASH_SOURCE[1]}";

  # 2024-07-06 jj5 - this is the location of the libexec which ships with jjlab, but on 'charisma' I use a different one
  #
  local default_libexec="$( realpath "$( dirname "${BASH_SOURCE[0]}" )/../ext/libexec" )";

  if [[
    "$USER" == 'jj5' &&
    "$HOSTNAME" == 'charisma' && 
    -d /home/jj5/repo/git/github/jj5/kickass-libexec
  ]]; then

    source /home/jj5/repo/git/github/jj5/kickass-libexec/inc/run.sh

    return $?;

  fi;

  source "${default_libexec}/inc/run.sh";

  return $?;

}

jjlab_load_libexec_and_run;
