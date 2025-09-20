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
        apt-get update && apt-get install -y php8.2 php8.2-cli php8.2-common php8.2-mysql php8.2-mysqli php8.2-pdo php8.2-pdo-mysql php8.2-zip php8.2-gd php8.2-mbstring php8.2-curl php8.2-xml php8.2-bcmath || \
        apt-get update && apt-get install -y php8.1 php8.1-cli php8.1-common php8.1-mysql php8.1-mysqli php8.1-pdo php8.1-pdo-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath || \
        apt-get update && apt-get install -y php8.0 php8.0-cli php8.0-common php8.0-mysql php8.0-mysqli php8.0-pdo php8.0-pdo-mysql php8.0-zip php8.0-gd php8.0-mbstring php8.0-curl php8.0-xml php8.0-bcmath || \
        apt-get update && apt-get install -y php7.4 php7.4-cli php7.4-common php7.4-mysql php7.4-mysqli php7.4-pdo php7.4-pdo-mysql php7.4-zip php7.4-gd php7.4-mbstring php7.4-curl php7.4-xml php7.4-bcmath
    # Install PHP for Alpine systems
    elif command -v apk &> /dev/null; then
        apk add --no-cache php82 php82-cli php82-common php82-mysqlnd php82-pdo php82-pdo-mysql php82-zip php82-gd php82-mbstring php82-curl php82-xml php82-bcmath
    # Install PHP for CentOS/RHEL systems
    elif command -v yum &> /dev/null; then
        yum install -y php php-cli php-common php-mysqlnd php-pdo php-mysql php-zip php-gd php-mbstring php-curl php-xml php-bcmath || \
        yum install -y php82 php82-cli php82-common php82-mysqlnd php82-pdo php82-mysql php82-zip php82-gd php82-mbstring php82-curl php82-xml php82-bcmath || \
        yum install -y php81 php81-cli php81-common php81-mysqlnd php81-pdo php81-mysql php81-zip php81-gd php81-mbstring php81-curl php81-xml php81-bcmath
    # Install PHP for newer RHEL/CentOS systems with dnf
    elif command -v dnf &> /dev/null; then
        dnf install -y php php-cli php-common php-mysqlnd php-pdo php-mysql php-zip php-gd php-mbstring php-curl php-xml php-bcmath || \
        dnf install -y php82 php82-cli php82-common php82-mysqlnd php82-pdo php82-mysql php82-zip php82-gd php82-mbstring php82-curl php82-xml php82-bcmath || \
        dnf install -y php81 php81-cli php81-common php81-mysqlnd php81-pdo php81-mysql php81-zip php81-gd php81-mbstring php81-curl php81-xml php81-bcmath
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
