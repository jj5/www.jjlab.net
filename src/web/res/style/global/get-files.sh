#!/bin/bash

main() {

  set -euo pipefail;

  cd "$( dirname "$0" )";

  wget -O table.css 'https://www.staticmagic.net/global/table.css';

}

main "$@";
