FROM php:8.4-fpm-bookworm

# For composer
SHELL ["/bin/bash", "-o", "pipefail", "-c"]

RUN apt-get update \
    && curl -sL https://deb.nodesource.com/setup_22.x | bash - \
    && apt install -y libicu-dev libonig-dev \
    libzip-dev locales unzip git vim libpng-dev gnupg libnss3 libx11-dev \
    wget openssh-client nodejs libjpeg-dev libpng-dev libfreetype6-dev \
    libjpeg62-turbo-dev libwebp-dev default-mysql-client \
    && docker-php-ext-install intl zip pdo_mysql mysqli gd bcmath \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && locale-gen en_US.UTF-8 \
    && localedef -f UTF-8 -i en_US en_US.UTF-8 \
    && mkdir /var/run/php-fpm

RUN npm install -g yarn

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set composer environment
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

COPY my.ini /usr/local/etc/php/conf.d/my.ini

# Install laravel installer
RUN composer global require "laravel/installer"

WORKDIR /var/www

