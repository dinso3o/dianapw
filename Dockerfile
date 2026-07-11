FROM php:8.4-fpm

# Install system dependencies dan PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mysqli mbstring exif pcntl bcmath gd

# Ambil Composer versi terbaru
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy kodingan kamu ke dalam server
COPY . .

# Jalankan install composer
RUN composer install --no-dev --optimize-autoloader

# Set environment port untuk Render
EXPOSE 80

CMD php artisan serve --host=0.0.0.0 --port=80