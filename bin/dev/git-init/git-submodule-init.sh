#!/bin/bash

# 2024-07-07 jj5 - NOTE: this script doesn't use kickass-libexec because it might not be available yet.

LX_EXIT_FILE_MISSING=41;

main() {

  set -euo pipefail;

  cd "$( dirname "${BASH_SOURCE[0]}" )/../../../";

  [ -d bin/dev ] || lx_fail $LX_EXIT_FILE_MISSING "please run from base directory.";

  git pull --recurse-submodules;

  git submodule add git@github.com:jj5/kickass-libexec.git ext/libexec;
  git submodule add git@github.com:jj5/mudball.git ext/mudball;

  git submodule update --init --recursive;

  pushd ext/libexec;

    git checkout main;

    git config -f .gitmodules submodule.submodule-path.branch main;

  popd;

  pushd ext/mudball;

    git checkout main;

    git config -f .gitmodules submodule.submodule-path.branch main;

  popd;

  git add .gitmodules ext/libexec ext/mudball;

  git commit -m 'Work, work...';

  git push;

}

main "$@";
