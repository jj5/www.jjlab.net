#!/bin/bash

main() {

  jjlab_run_dev jjlab_git_submodule_update;

}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/dev.sh";
