#!/bin/bash
echo "WARNING: This script will delete the default folder by default";
echo "choose a input location";
read input
rm -rf default/
cp -r $input/ default/
cd default/ &&
# This statements need to be modifed to fit your needs
find . -type f -exec sed -i "s/WUC/Fotherbys/gi" {} \;
find . -type f -exec sed -i "s/Woodlands/Fotherbys/gi" {} \;
find . -type f -exec sed -i "s/Business College//gi" {} \;
find . -type f -exec sed -i "s/College//gi" {} \;
find . -type f -exec sed -i "s/University//gi" {} \;
find . -type f -exec sed -i "s/student/customer/gi" {} \;
find . -type f -exec sed -i "s/'customer'/'student'/gi" {} \;
find . -type f -exec sed -i "s/2021/2022/gi" {} \;
find . -type f -exec sed -i "s/2020/2021/gi" {} \;
find . -type f -exec sed -i "s/logo.svg/logo-w-text.svg/gi" {} \;
