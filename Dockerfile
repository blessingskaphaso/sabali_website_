FROM richarvey/nginx-php-fpm:8.2

COPY . /var/www/html
WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

RUN php artisan key:generate || true
RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

ENV WEBROOT=/var/www/html/public
