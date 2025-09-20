#!/bin/bash

# Exit on any error
set -e

echo "🚀 Starting Laravel build process for Vercel..."

# Check if composer.json exists
if [ ! -f "composer.json" ]; then
    echo "❌ Error: composer.json not found"
    exit 1
fi

# Composer is installed by the vercel-php runtime
echo "✅ Composer is available"

# Install Composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Generate application key if .env exists and key is not set
if [ -f ".env" ] && ! grep -q "APP_KEY=base64:" .env; then
    echo "🔑 Generating application key..."
    php artisan key:generate --force
fi

# Clear all caches first
echo "🧹 Clearing existing caches..."
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan event:clear

# Generate optimized caches for production
echo "⚡ Generating optimized caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# Optimize Composer autoloader
echo "🔧 Optimizing Composer autoloader..."
composer dump-autoload --optimize --no-interaction

# Verify bootstrap/cache directory exists and has content
if [ ! -d "bootstrap/cache" ]; then
    echo "❌ Error: bootstrap/cache directory not found"
    exit 1
fi

echo "✅ Build completed successfully!"
echo "📁 Cache files generated:"
ls -la bootstrap/cache/
