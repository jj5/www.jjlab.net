#!/bin/bash

# 2024-07-07 jj5 - NOTE: this script doesn't use kickass-libexec because it might not be available yet.

LX_EXIT_FILE_MISSING=41;

main() {

  set -euo pipefail;

  cd "$( dirname "${BASH_SOURCE[0]}" )/../../../";

  [ -d bin/dev ] || lx_fail $LX_EXIT_FILE_MISSING "please run from base directory.";

  # 2024-07-07 jj5 - can you tell I don't know what I'm doing?

  lx_run git pull --recurse-submodules

  lx_run git submodule update --remote;

  lx_run git pull --recurse-submodules

}

main "$@";
