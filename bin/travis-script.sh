#!/bin/bash

set -ev

# PHPUnit
phpunit

# Coveralls
if [[ '1' == $COVERAGE ]]; then
	php ../vendor/bin/coveralls
fi

# Grunt
if [[ '1' == $GRUNT ]]; then
	npm install -g grunt-cli

	npm install --no-optional

	grunt
fi
