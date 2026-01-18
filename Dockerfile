# Use official PHP + FPM image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    sudo \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Generate Laravel key
RUN php artisan key:generate || true

# Clear cache
RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

# Expose port 9000 (PHP-FPM default)
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
