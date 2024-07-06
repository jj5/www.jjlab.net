#!/bin/bash

LX_LOCK_FILE='/var/lock/jjlab-deploy.lock';

main() {

  deploy grace /var/www/bk-web-1-www.jjlab.net;

}

deploy() {

  local host="${1}";
  local path="${2}";

  lx_ssh "$host" /srv/libexec/bin/lx-update-web.sh "$path";

  lx_note "deployed to $host:$path";

  lx_ssh lore sudo /srv/admin/lore-archive-import.sh "$host";

  lx_note "deployed to $host:$path then imported archives from '$host'.";

}

source "$( dirname "${BASH_SOURCE[0]}" )/../../ext/libexec/inc/run.sh";
