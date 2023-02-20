#!/bin/bash

echo "Restructuring dist directory..."

mv dist/assets/* dist
rm -rf dist/assets

perl -pi -e 's/\/assets\///g' dist/index.html
perl -pi -e 's/\/assets\///g' dist/index*.js