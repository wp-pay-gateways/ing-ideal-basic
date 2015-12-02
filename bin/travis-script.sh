#!/bin/bash

set -ev

phpunit

if [[ '1' == $COVERAGE ]]; then
	php ../vendor/bin/coveralls
fi

