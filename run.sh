#!/bin/sh

php artisan config:cache
php artisan route:cache
php artisan view:cache

apt-install pdo_mysql 
apt-get install nodejs

npm install
npm run build

cd MySQLi
docker build --tag djpic/php:mysqli .

cd ..

php artisan migrate --force

exec php-fpm
