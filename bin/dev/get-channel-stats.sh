#!/bin/bash

if [ -z "${LX_LOCK_FILE:-}" ]; then

  LX_LOCK_FILE='/var/lock/jjlab.net-stats.lock';

fi

main() {

  set -euo pipefail;

  cd "$( dirname "${BASH_SOURCE[0]}" )/../../";

  local list=(
    EEVblog
  );

  for channel in "${list[@]}"; do

    local slug="@$channel";

    lx_note "downloading stats for $slug";

    lx_run bin/dev/get-channel-stats.php $slug;

  done;

  lx_run bin/dev/push.sh;

  for channel in "${list[@]}"; do

    local slug="@$channel";

    lx_note "rendering stats for $slug";

    local html_file="src/web/root/in-the-lab/stats/$channel.html";

    [ -f $html_file ] || {

      lx_fail $LX_EXIT_FILE_MISSING "file not found: $html_file";

    };

    curl https://www.inthelabwithjayjay.com/in-the-lab/stats.php/$slug > $html_file;

  done;

  lx_run bin/dev/push.sh;

}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/dev.sh";
