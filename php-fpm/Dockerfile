FROM php:7.3.11-fpm-stretch

RUN apt update && apt install -y git zip
RUN docker-php-ext-install pdo pdo_mysql mbstring
RUN pecl install xdebug && docker-php-ext-enable xdebug
