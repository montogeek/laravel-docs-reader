#!/bin/bash

SCRIPTPATH=`pwd -P`
DOCS=${SCRIPTPATH}/docs

rm -rf ${DOCS}

git clone https://github.com/montogeek/laravel-docs-es.git --branch 4.1 --single-branch ${DOCS}/4.1
git clone https://github.com/montogeek/laravel-docs-es.git --branch 5.0 --single-branch ${DOCS}/5.0
git clone https://github.com/montogeek/laravel-docs-es.git --branch master --single-branch ${DOCS}/5.1