FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Install MySQL PDO extension
RUN docker-php-ext-install pdo pdo_mysql

# Copy your PHP files to the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html
