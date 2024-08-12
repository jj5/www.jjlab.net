#!/bin/bash

main() {

  set -euo pipefail;

  cd "$( dirname "${BASH_SOURCE[0]}" )";

  command -v git || {

    echo "git is not installed. install git first.";

    exit 1;

  }

  git submodule update --init --recursive

  command -v composer || {

    echo "composer is not installed. run install-composer.sh first.";

    exit 1;

  }

  composer install;

}

main "$@";
