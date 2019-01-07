FROM richarvey/nginx-php-fpm
RUN rm /var/www/html/index.php
COPY php /var/www/html
COPY composer.json /var/www
COPY composer.lock /var/www
WORKDIR /var/www
RUN composer install

EXPOSE 80