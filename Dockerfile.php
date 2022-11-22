FROM php:8.1-fpm-alpine

WORKDIR /var/www

EXPOSE 9000

RUN apk add --no-cache curl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

RUN rm -rf /var/cache package*.json phpunit.xml database tests .git*

RUN chmod +x run.sh && mv run.sh /usr/local/bin/run

USER www-data

CMD ["run"]






