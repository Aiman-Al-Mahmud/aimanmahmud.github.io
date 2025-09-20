#!/bin/bash

# Exit on any error
set -e

echo "🚀 Starting Laravel build process for Vercel (Alternative method)..."

# Check if composer.json exists
if [ ! -f "composer.json" ]; then
    echo "❌ Error: composer.json not found"
    exit 1
fi

# Method 1: Try installing Composer via package manager
echo "📦 Installing Composer..."
if command -v apt-get &> /dev/null; then
    echo "Using apt-get to install Composer..."
    apt-get update && apt-get install -y composer
elif command -v yum &> /dev/null; then
    echo "Using yum to install Composer..."
    yum install -y composer
elif command -v apk &> /dev/null; then
    echo "Using apk to install Composer..."
    apk add composer
else
    # Method 2: Install Composer manually
    echo "Installing Composer manually..."
    EXPECTED_CHECKSUM="$(php -r 'copy("https://composer.github.io/installer.sig", "php://stdout");')"
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ACTUAL_CHECKSUM="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

    if [ "$EXPECTED_CHECKSUM" != "$ACTUAL_CHECKSUM" ]; then
        >&2 echo '❌ Error: Invalid installer checksum'
        rm composer-setup.php
        exit 1
    fi

    php composer-setup.php --install-dir=/usr/local/bin --filename=composer
    RESULT=$?
    rm composer-setup.php

    if [ $RESULT -ne 0 ]; then
        echo "❌ Error: Failed to install Composer"
        exit 1
    fi

    export PATH="$PATH:/usr/local/bin"
fi

# Verify Composer installation
if ! command -v composer &> /dev/null; then
    echo "❌ Error: Failed to install Composer"
    exit 1
fi

echo "✅ Composer installed successfully: $(composer --version)"

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
