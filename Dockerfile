FROM php:7.4.3-fpm

RUN apt-get update && apt-get install -y \
    git \ 
    curl \
    zip \
    unzip \ 
    sendmail

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN rm -rf /var/lib/apt/lists/*

WORKDIR /var/www