#!/bin/bash

main() {

  set -euo pipefail;

  cd "$( dirname "$0" )/../../";

  [ -d bin ] || { echo "please run from base directory."; exit 1; }

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
