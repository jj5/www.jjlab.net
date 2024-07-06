#!/bin/bash

main() {

  set -euo pipefail;

  cd "$( dirname "$0" )/../../";

  [ -d bin ] || { echo "please run from base directory."; exit 1; }

  git submodule add git@github.com:jj5/kickass-libexec.git ext/libexec;
  git submodule add git@github.com:jj5/mudball.git ext/mudball;

  git submodule update --init --recursive

}

main "$@";
