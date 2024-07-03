#!/bin/bash

main() {

  set -euo pipefail;

  cd "$( dirname "$0" )";

  wget -O normalize.css 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css';
  wget -O milligram.css 'https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css';

}

main "$@";

