FROM php:8.2-apache

# Install PostgreSQL support
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql

# Copy your PHP files
COPY . /var/www/html/

# Optional: Enable mod_rewrite if using friendly URLs
RUN a2enmod rewrite

# Expose port 80 (default for Apache)
EXPOSE 80
