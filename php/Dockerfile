FROM richarvey/nginx-php-fpm
RUN rm /var/www/html/index.php
COPY public_html /var/www/html
COPY composer.json /var/www
COPY composer.lock /var/www
RUN composer install /var/www

EXPOSE 80