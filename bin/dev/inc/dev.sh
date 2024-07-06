#!/bin/bash

LX_LOCK_FILE='/var/lock/jjlab-dev.lock';

jjlab_sync() {

  jjlab_validate_dev_environment;

  lx_run jjlab_commit;

  lx_run bin/admin/deploy.sh;

}

jjlab_commit() {

  jjlab_validate_dev_environment;

  lx_run "$LX_DIR_BIN/lx-gui.sh";

}

jjlab_run_dev() {

  local task="$1";

  lx_script_dir;

  cd "../../";

  jjlab_validate_dev_environment;

  lx_run "$task";

}

jjlab_validate_dev_environment() {

  [ -d bin/dev ] || lx_fail $LX_EXIT_FILE_MISSING "please run from base directory.";

}

source "$( dirname "${BASH_SOURCE[0]}" )/../../../inc/run.sh";
