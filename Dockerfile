FROM php:8.2-apache

# Apache mod_rewrite enable
RUN a2enmod rewrite

# Install required system packages and extensions
RUN apt-get update && apt-get install -y \
    zip unzip git && \
    docker-php-ext-install pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy all files
COPY . /var/www/html

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel permissions fix
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Set Apache DocumentRoot to Laravel public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

EXPOSE 80
