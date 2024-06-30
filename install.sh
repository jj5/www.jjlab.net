#!/bin/bash

main() {

  set -euo pipefail;

  git submodule update --init --recursive

  # 2024-07-01 jj5 - you need to install composer first

  composer install;

}

install_composer() {

  cd /root
  apt update
  apt install wget php-cli php-zip unzip
  wget -O composer-setup.php https://getcomposer.org/installer

}

main "$@";
