# Use an official PHP + Apache image as the base
FROM php:8.1-apache

# Install required dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    curl \
    mariadb-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql \
    && a2enmod rewrite \
    && service apache2 restart

# Set new Document Root
WORKDIR /var/www/src

# Copy project files
COPY . /var/www/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/ \
    && chmod -R 755 /var/www/

# Update Apache configuration to use `src` as DocumentRoot
RUN sed -i 's|/var/www/html|/var/www/src|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|/var/www/html|/var/www/src|g' /etc/apache2/apache2.conf \
    && service apache2 restart

# Expose the Apache port
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
