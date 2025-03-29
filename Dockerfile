# Base image: Ubuntu 22.04
FROM ubuntu:22.04

# Prevent interactive prompts during package installation
ENV DEBIAN_FRONTEND=noninteractive

# Update package list and install necessary packages
RUN apt-get update && apt-get install -y \
    apache2 \
    mysql-client \
    curl \
    git \
    unzip \
    software-properties-common \
    lsb-release \
    && apt-get clean

# Add PHP 8.2 repository
RUN add-apt-repository ppa:ondrej/php -y && apt-get update

# Install PHP 8.2 and required extensions
RUN apt-get install -y \
    php8.2 \
    libapache2-mod-php8.2 \
    php8.2-mysql \
    php8.2-cli \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-curl \
    php8.2-zip \
    php8.2-bcmath \
    && apt-get clean

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Enable Apache mods
RUN a2enmod rewrite

# Set up working directory
WORKDIR /var/www/html

# Copy Laravel files into the container
COPY ./app/ReviewPortal /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Configure Apache (you can modify this file as needed for your Laravel app)
COPY ./docker/apache/laravel.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Start Apache service
CMD ["apache2ctl", "-D", "FOREGROUND"]
