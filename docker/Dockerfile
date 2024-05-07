FROM php:8.0.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli    


WORKDIR /var/www