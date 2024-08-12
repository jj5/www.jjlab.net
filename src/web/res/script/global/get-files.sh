#!/bin/bash

main() {

  set -euo pipefail;

  cd "$( dirname "$0" )";

  wget -O default.js 'https://www.staticmagic.net/global/default.js';

}

main "$@";
