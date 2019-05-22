FROM ubuntu:latest

MAINTAINER webmaster@localhost
ENV APACHE_DOCUMENT_ROOT=/var/www/html

RUN apt-get update && apt-get install -y tzdata

RUN apt-get install -y php \
	libapache2-mod-php \
	php-mysql \
	php-cgi \
	php-curl \
	php-mbstring \
	git \
	curl lynx-common lynx \
	&& rm -rf /var/lib/apt/lists/* \
	&& apt-get clean -y


RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN cd /tmp && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

RUN rm /var/www/html/index.html

COPY public_html var/www/html

COPY php/mailer.php /var/www/php

COPY php/composer.json /var/www

CMD /usr/sbin/apache2ctl -D FOREGROUND

WORKDIR /var/www



RUN composer install

EXPOSE 587
