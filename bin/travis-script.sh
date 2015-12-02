#!/bin/bash

set -ev

phpunit

if [[ "$COVERAGE" == "1" ]]
	php ../vendor/bin/coveralls
fi

