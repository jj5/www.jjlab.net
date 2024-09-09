#!/bin/bash

CHANNEL_LIST=(
  EEVblog
);

STATS_DIR='src/web/root/in-the-lab/stats';

if [ -z "${LX_LOCK_FILE:-}" ]; then

  LX_LOCK_FILE='/var/lock/jjlab.net-stats.lock';

fi

main() {

  set -euo pipefail;

  cd "$( dirname "${BASH_SOURCE[0]}" )/../../";

  [ -d "$STATS_DIR" ] || { lx_fail $LX_EXIT_FILE_MISSING "directory missing: $STATS_DIR"; };

  for channel in "${CHANNEL_LIST[@]}"; do

    local slug="@$channel";

    lx_note "downloading stats for $slug";

    lx_run bin/dev/get-channel-stats.php $slug;

  done;

  lx_run bin/dev/push.sh;

  for channel in "${CHANNEL_LIST[@]}"; do

    local slug="@$channel";

    lx_note "rendering stats for $slug";

    local html_file="$STATS_DIR/$channel.html";

    curl https://www.inthelabwithjayjay.com/in-the-lab/stats.php/$slug > $html_file;

  done;

  lx_run bin/dev/push.sh;

}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/dev.sh";
