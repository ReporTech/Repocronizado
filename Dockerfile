# Dockerfile
FROM php:8.2-apache # O la versión de PHP que necesites

WORKDIR /var/www/html

COPY composer.json composer.lock ./

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-dev --prefer-dist

# Si usas yarn para JS:
RUN apt-get update && apt-get install -y nodejs npm && \
    npm install -g yarn && \
    yarn

COPY . .

EXPOSE 80
