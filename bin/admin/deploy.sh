#!/bin/bash

main() {

  jjlab_run_admin jjlab_deploy_all;

}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/admin.sh";
