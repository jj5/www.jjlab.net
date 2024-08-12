#!/bin/bash

# 2024-07-07 jj5 - NOTE: this script doesn't use kickass-libexec because it might not be available yet.

LX_EXIT_FILE_MISSING=41;

main() {

  set -euo pipefail;

  cd "$( dirname "${BASH_SOURCE[0]}" )/../../../";

  [ -d bin/dev ] || lx_fail $LX_EXIT_FILE_MISSING "please run from base directory.";

  # 2024-07-06 jj5 - SEE: https://chatgpt.com/share/f9eabd09-6455-40a4-966f-3a5ce8c67f4d

  git submodule deinit -f --all

  archive .git/modules/*

  git rm -r --cached ext/libexec

  git rm -r --cached ext/mudball

  git commit -m 'Work, work...';

  archive .gitmodules ext;

  lx-gui.sh;

}

main "$@";
