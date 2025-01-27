# Gunakan image resmi PHP dengan ekstensi yang dibutuhkan
FROM php:8.2-fpm

# Instal dependensi dasar
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    libpq-dev \
    unzip \
    libzip-dev \
    zip \
    libonig-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin file Laravel ke container
WORKDIR /var/www/html
COPY . .

# Atur permission folder Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Instal dependensi Laravel dengan caching
RUN composer install --no-dev --optimize-autoloader --no-progress --no-scripts \
    && composer dump-autoload --optimize

# Expose port 9000 untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]
