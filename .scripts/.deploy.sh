#!/bin/bash
set -e

echo "Deployment started ..."


# Enter maintenance mode or return true
# if already is in maintenance mode
(php artisan down) || true

# Pull the latest version of the app
git pull origin main

# Install composer dependencies
# composer update --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Clear the old cache
php artisan clear-compiled

#clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear

# Recreate cache
php artisan optimize

# Compile npm assets

# npm run prod

# Run database migrations
# php artisan migrate --force

# update API Docs
#php artisan idoc:generate

# Exit maintenance mode
php artisan up

echo "Deployment finished!"
