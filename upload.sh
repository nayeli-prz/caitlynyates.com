#!/bin/bash
# Rysnc tutorial: https://kyup.com/tutorials/copy-files-rsync-ssh/
rsync -r -a -v -e ssh --delete . bb3nh0svegm2@caitlynyates.com:~/public_html/ \
--exclude '.git' \
--exclude 'cgi-bin' \
--exclude '.gitignore' \
--exclude 'README.md' \
--exclude 'upload.sh' \
--exclude 'yarn-error.log' \
--exclude 'yarn.lock' \
--exclude 'package.json' \
--exclude '.DS_Store' \
--exclude 'sass' \
--exclude 'sass-cache'
