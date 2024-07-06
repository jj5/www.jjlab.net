#!/bin/bash

main() {

  set -euo pipefail;

  cd "$( dirname "$0" )/../../";

  [ -d bin ] || { echo "please run from base directory."; exit 1; }

  git submodule update --init --recursive

}

main "$@";
