@echo off
php bin/console assets:install --symlink
php bin/console cache:clear
php bin/console cache:clear --env=prod
php bin/console assetic:dump

echo ******DEPLOY TERMINE******