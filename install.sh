#!/bin/bash

main() {

  set -euo pipefail;

  git submodule update --init --recursive

  # 2024-07-01 jj5 - you need to install composer first

  composer install;

}

main "$@";
