#!/bin/bash

# Laravel Vercel Build Script
echo "🚀 Starting Laravel build process..."

# Set environment variables for build
export COMPOSER_ALLOW_SUPERUSER=1
export APP_ENV=production
export APP_DEBUG=false
export LOG_CHANNEL=stderr
export LOG_LEVEL=error

# Install Composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction

# Check if composer install was successful
if [ $? -ne 0 ]; then
    echo "❌ Composer install failed"
    exit 1
fi

# Generate application key if .env exists
if [ -f ".env" ]; then
    echo "🔑 Generating application key..."
    php artisan key:generate --force --no-interaction
fi

# Clear and cache configurations
echo "⚙️ Clearing and caching configurations..."
php artisan config:clear -n
php artisan config:cache -n

# Clear and cache routes
echo "🛣️ Clearing and caching routes..."
php artisan route:clear -n
php artisan route:cache -n

# Clear and cache views
echo "👁️ Clearing and caching views..."
php artisan view:clear -n
php artisan view:cache -n

# Clear and cache events
echo "📅 Clearing and caching events..."
php artisan event:clear -n
php artisan event:cache -n

# Optimize the application
echo "⚡ Optimizing application..."
php artisan optimize -n

echo "✅ Build completed successfully!"
