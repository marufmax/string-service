FROM php:8.0-cli-alpine

# Required extensions
RUN apk add zip unzip && docker-php-ext-install bcmath

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD ./ /app

WORKDIR /app

RUN composer update