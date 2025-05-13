# Use PHP Apache image
FROM php:8.1-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Copy PHP files into the container
COPY . /var/www/html/

# Expose the port the app will run on
EXPOSE 80
