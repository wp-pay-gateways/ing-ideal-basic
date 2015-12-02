#!/bin/bash

set -ev

composer self-update

if [[ "$COVERAGE" == "1" ]]; then
	composer install
else
	composer install --no-dev
fi

wget https://raw.githubusercontent.com/wp-cli/sample-plugin/master/bin/install-wp-tests.sh

bash install-wp-tests.sh wordpress_test root '' localhost $WP_VERSION 
