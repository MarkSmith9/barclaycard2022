#!/bin/bash
mkdir copy
for file in *.svg
do
scour --enable-viewboxing --create-groups --shorten-ids --enable-id-stripping --enable-comment-stripping --disable-embed-rasters --remove-metadata --strip-xml-prolog -p 9 < "$file" > "copy/$file"
done
