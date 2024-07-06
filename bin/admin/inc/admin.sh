#!/bin/bash

LX_LOCK_FILE='/var/lock/jjlab.lock';

jjlab_run_admin() {

  local task="$1";

  lx_script_dir;

  cd "../../";

  lx_run "$task";

}

jjlab_sync() {

  jjlab_validate_environment;

  lx_run jjlab_commit;

  lx_run jjlab_deploy_all;

}

jjlab_commit() {

  jjlab_validate_environment;

  lx_run "$LX_DIR_BIN/lx-gui.sh";

}

jjlab_deploy_all() {

  jjlab_validate_environment;

  lx_run jjlab_deploy grace /var/www/bk-web-1-www.jjlab.net;

}

jjlab_deploy() {

  local host="${1}";
  local path="${2}";

  jjlab_validate_environment;

  lx_ssh "$host" /srv/libexec/bin/lx-update-web.sh "$path";

  lx_note "deployed to $host:$path";

  lx_ssh lore sudo /srv/admin/bin/lore-archive-import.sh "$host";

  lx_note "deployed to $host:$path then imported archives from '$host'.";

}

jjlab_validate_environment() {

  [ -d bin/admin/sync.sh ] || lx_fail $LX_EXIT_FILE_MISSING "please run from base directory.";

}

source "$( dirname "${BASH_SOURCE[0]}" )/../../../inc/run.sh";
