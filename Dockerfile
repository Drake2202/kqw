FROM php:5.4-apache

COPY . /var/www/html

WORKDIR /var/www/html

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli mysqli

EXPOSE 80