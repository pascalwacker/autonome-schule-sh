#!/usr/bin/env bash

#php composer.phar update
php bin/console cache:clear --no-warmup
php bin/console assets:install --symlink
php bin/console assetic:dump --env=dev
php bin/console doctrine:schema:update --force
#rm -rf web/media/*
