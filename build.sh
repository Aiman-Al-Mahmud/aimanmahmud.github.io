#!/bin/bash

# Exit on any error
set -e

echo "Starting Laravel build process..."

# Install Composer
curl -sS https://getcomposer.org/installer | php

# Install dependencies
php composer.phar install --no-dev --optimize-autoloader --no-interaction

# Generate application key if .env exists
if [ -f ".env" ]; then
    php artisan key:generate --force
fi

# Clear and cache configurations
php artisan config:clear
php artisan config:cache

# Clear and cache routes
php artisan route:clear
php artisan route:cache

# Clear and cache views
php artisan view:clear
php artisan view:cache

echo "Build completed successfully!"