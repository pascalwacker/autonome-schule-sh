#!/usr/bin/env bash

php bin/console assets:install --symlink
php bin/console assetic:dump --env=dev
