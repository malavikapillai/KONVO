FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install MySQL PDO extension
RUN docker-php-ext-install pdo pdo_mysql

# Copy your code into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html
