FROM php:8.2.0-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli   
WORKDIR /var/www
