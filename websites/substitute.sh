#!/bin/bash
echo "WARNING: This script will delete the default folder by default";
echo "choose a input location";
read input
rm -rf default/
cp -r $input/ default/
cd default/ &&
# This statements need to be modifed to fit your needs
find . -type f -exec sed -i "s/cheese.png/cheese.svg/gi" {} \;
