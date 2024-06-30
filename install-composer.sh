#!/bin/bash

main() {

  set -euo pipefail;

  cd /root

  apt update

  apt install wget php-cli php-zip unzip

  wget -O composer-setup.php https://getcomposer.org/installer

  local HASH=$( wget -q -O - https://composer.github.io/installer.sig );

  php -r "if (hash_file('sha384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

  php composer-setup.php --install-dir=/usr/local/bin --filename=composer

  composer --version

}

main "$@";
