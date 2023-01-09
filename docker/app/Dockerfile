FROM php:8.1-fpm

ENV TZ Asia/Tokyo

# install Library
RUN apt-get update && \
  apt-get install -y git unzip libzip-dev libicu-dev libonig-dev curl npm && \
  docker-php-ext-install intl pdo_mysql zip bcmath

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs

RUN pecl install xdebug && \
  docker-php-ext-enable xdebug
# config file COPY
COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

# install Composer
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

WORKDIR /app
