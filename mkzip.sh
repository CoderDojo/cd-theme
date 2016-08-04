#!/bin/bash

rm -f cd-theme.zip
rm -rf cd-theme/
DIRS_TO_COPY=`ls | tr "\n" " "`
mkdir cd-theme
cp -r $DIRS_TO_COPY cd-theme/
rm -rf cd-theme/.git/
zip -r cd-theme.zip cd-theme/
rm -rf cd-theme/
