#!/bin/bash

LX_LOCK_FILE='/var/lock/jjlab-dev.lock';

jjlab_version() {

  jjlab_validate_dev_environment;

  php bin/dev/libexec/version.php;

}

jjlab_sync() {

  jjlab_validate_dev_environment;

  lx_run jjlab_commit;

  lx_run bin/admin/deploy.sh;

}

jjlab_release() {

  jjlab_validate_dev_environment;

  # 2024-07-06 jj5 - TODO: run release process...

  true;

}

jjlab_commit() {

  jjlab_validate_dev_environment;

  lx_run jjlab_version_patch_increment;

  lx_run "$LX_DIR_BIN/lx-gui.sh";

}

jjlab_version_patch_increment() {

  jjlab_validate_dev_environment;

  php bin/dev/libexec/version-patch-increment.php;

}

jjlab_gen() {

  jjlab_validate_dev_environment;

  # 2024-07-06 jj5 - TODO: run code generation...

  true;

}

jjlab_git_submodule_init() {

  jjlab_validate_dev_environment;

  git submodule add git@github.com:jj5/kickass-libexec.git ext/libexec;
  git submodule add git@github.com:jj5/mudball.git ext/mudball;

  git submodule update --init --recursive

  pushd ext/libexec;

    git checkout main;

    git config -f .gitmodules submodule.submodule-path.branch main;

  popd;

  pushd ext/mudball;

    git checkout main;

    git config -f .gitmodules submodule.submodule-path.branch main;

  popd;

  git add .gitmodules ext;

  git commit -m 'Work, work...';

  git push;

}

jjlab_git_submodule_deinit() {

  jjlab_validate_dev_environment;

  # 2024-07-06 jj5 - SEE: https://chatgpt.com/share/f9eabd09-6455-40a4-966f-3a5ce8c67f4d

  git submodule deinit -f --all

  archive .git/modules/*

  git rm -r --cached ext/libexec

  git rm -r --cached ext/mudball

  git commit -m 'Work, work...';

  archive .gitmodules ext;

  lx-gui.sh;

}

jjlab_git_submodule_update() {

  jjlab_validate_dev_environment;

  git submodule update --init --recursive

}

jjlab_run_dev() {

  local task="$1";

  lx_script_dir;

  cd "../../";

  jjlab_validate_dev_environment;

  lx_run "$task";

}

jjlab_validate_dev_environment() {

  [ -d bin/dev ] || lx_fail $LX_EXIT_FILE_MISSING "please run from base directory.";

}

source "$( dirname "${BASH_SOURCE[0]}" )/../../../inc/run.sh";
