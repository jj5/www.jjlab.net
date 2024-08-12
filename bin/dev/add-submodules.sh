#!/bin/bash

main() {

  pushd "$( dirname "$0" )/../../" > /dev/null;

    [ -x bin/dev/add-submodules.sh ] || {

      echo "error: bin/dev/add-submodules.sh not found, please run from project base dir." >&2;

      exit 1;

    }

    git submodule add git@github.com:jj5/mudball.git ext/mudball || true;

    git submodule add git@github.com:jj5/kickass-libexec.git ext/libexec || true;

    git submodule init;

    git submodule update;

    git commit -m "Add submodules.";

  popd > /dev/null;


}

source "$( dirname "${BASH_SOURCE[0]}" )/inc/dev.sh";
