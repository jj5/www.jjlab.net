#!/bin/bash

main() {

  set -euo pipefail;

  # 2024-07-01 jj5 - you need to install composer first

  composer install;

}

main "$@";
