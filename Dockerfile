FROM php:8.2-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y \
    curl zip unzip git \
    && docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --optimize-autoloader --no-dev --no-interaction

RUN cp .env.example .env && php artisan key:generate

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000