FROM php:8.1.10-apache

RUN pecl install xdebug && docker-php-ext-enable xdebug

#TODO: (rowan) This should be handled by the 'mix' container
RUN apt-get update --allow-releaseinfo-change
RUN apt-get -y install curl gnupg
RUN curl -sL https://deb.nodesource.com/setup_14.x  | bash -
RUN apt-get -y install nodejs
RUN npm install

# //extra added for fixing some issues (git and gd extension) starts
# Installing composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git \
        libzip-dev \
        zip \
        unzip \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip

RUN pecl install -o -f redis \
    &&  docker-php-ext-enable redis

WORKDIR /var/www/laravel_docker

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data