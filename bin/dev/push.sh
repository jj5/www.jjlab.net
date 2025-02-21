#!/bin/bash

main() {

  jjlab_run_dev jjlab_push;

  # 2025-02-22 jj5 - HACK: this just fixes up the konsole window title...
  #
  echo -ne "\033]0;$USER@$HOSTNAME\007"

}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/dev.sh";

