#!/bin/bash

rm -f cd-theme.zip cd-theme/
mkdir cd-theme
cp -r ./* cd-theme/
rm -rf cd-theme/.git/
zip -r cd-theme.zip cd-theme/
rm -rf cd-theme/
