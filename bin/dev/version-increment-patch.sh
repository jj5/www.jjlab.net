#!/bin/bash

LX_LOCK_FILE='/var/lock/jjlab-version.lock';

main() {

  jjlab_run_dev jjlab_version_increment_patch;

}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/dev.sh";
