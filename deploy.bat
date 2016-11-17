@echo off
php bin/console doctrine:database:create
php bin/console doctrine:schema:drop --force
php bin/console doctrine:schema:create
php bin/console importFormation
php bin/console importCertification
php bin/console importDetailsFormation
php bin/console importLigneCompetence
php bin/console importObjectif
php bin/console importSessionsFormation
php bin/console importTheme
php bin/console importNecessiter
php bin/console assets:install --symlink
php bin/console cache:clear
php bin/console cache:clear --env=prod

echo ******DEPLOY TERMINE******