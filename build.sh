#!/bin/bash

# Laravel Vercel Build Script with Composer Installation
echo "🚀 Starting Laravel build process..."

# Set environment variables for build
export COMPOSER_ALLOW_SUPERUSER=1
export APP_ENV=production
export APP_DEBUG=false
export LOG_CHANNEL=stderr
export LOG_LEVEL=error

# Install PHP if not available
echo "🐘 Checking for PHP..."
if ! command -v php &> /dev/null; then
    echo "📥 Installing PHP..."
    # Install PHP for Ubuntu/Debian systems
    if command -v apt-get &> /dev/null; then
        apt-get update && apt-get install -y php8.2 php8.2-cli php8.2-common php8.2-mysql php8.2-zip php8.2-gd php8.2-mbstring php8.2-curl php8.2-xml php8.2-bcmath
    # Install PHP for Alpine systems
    elif command -v apk &> /dev/null; then
        apk add --no-cache php82 php82-cli php82-common php82-mysqlnd php82-zip php82-gd php82-mbstring php82-curl php82-xml php82-bcmath
    # Install PHP for CentOS/RHEL systems
    elif command -v yum &> /dev/null; then
        yum install -y php php-cli php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-bcmath
    else
        echo "❌ Could not install PHP. Unsupported system."
        exit 1
    fi
    if [ $? -ne 0 ]; then
        echo "❌ Failed to install PHP"
        exit 1
    fi
fi

# Install Composer if not available
echo "📦 Checking for Composer..."
if ! command -v composer &> /dev/null; then
    echo "📥 Installing Composer..."
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    if [ $? -ne 0 ]; then
        echo "❌ Failed to install Composer"
        exit 1
    fi
fi

# Verify Composer installation
echo "✅ Composer version: $(/usr/local/bin/composer --version 2>/dev/null || composer --version)"

# Install Composer dependencies
echo "📦 Installing Composer dependencies..."
(/usr/local/bin/composer --version 2>/dev/null || composer --version) && (/usr/local/bin/composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction || composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction)

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

# Create bootstrap/cache directory if it doesn't exist
echo "📁 Creating bootstrap/cache directory..."
mkdir -p bootstrap/cache

# Set proper permissions for cache directory
chmod -R 755 bootstrap/cache

echo "✅ Laravel build process completed successfully!"
