#!/bin/bash

LX_LOCK_FILE='/var/lock/jjlab-deploy.lock';

main() {

  lx_script_dir;

  cd "../../";

  lx_run deploy_all;

}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/admin.sh";
