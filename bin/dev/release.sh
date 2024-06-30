#!/bin/bash

set -euo pipefail

# 2024-06-15 jj5 - TODO: run custom release process here...
#
bin/dev/gen.sh || exit 1;
svnman release || exit 2;

