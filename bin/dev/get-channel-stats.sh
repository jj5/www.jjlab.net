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

    echo "downloading stats for $slug";

    bin/dev/get-channel-stats.php $slug;

    bin/dev/push.sh;

    echo "rendering stats for $slug";

    local html_file="src/web/root/in-the-lab/stats/$channel.html";

    [ -f $html_file ] || { echo "error: file not found: $html_file"; exit 1; };

    curl https://www.inthelabwithjayjay.com/in-the-lab/stats.php/$slug > $html_file;

  done;


}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/dev.sh";
