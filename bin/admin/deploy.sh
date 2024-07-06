#!/bin/bash

LX_LOCK_FILE='/var/lock/jjlab-deploy.lock';

main() {

  lx_ssh grace /srv/libexec/bin/lx-update-web.sh /var/www/bk-web-1-www.jjlab.net;

}

source "$( dirname "${BASH_SOURCE[0]}" )/../../ext/libexec/inc/run.sh";
