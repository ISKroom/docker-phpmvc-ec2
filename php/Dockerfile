FROM php:8-apache
RUN  a2enmod rewrite
RUN apt-get update \
    && docker-php-ext-install pdo_mysql
WORKDIR "/var/www/html"
COPY . .
