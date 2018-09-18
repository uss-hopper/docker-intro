FROM ubuntu:latest
MAINTAINER webmaster@localhost

RUN apt-get update && apt-get install -y tzdata
RUN apt-get install -y php \
	libapache2-mod-php \
	php-mysql \
	php-cgi \
	php-curl \
	git \
	curl lynx-common lynx \
	sendmail \
	&& rm -rf /var/lib/apt/lists/* \
	&& apt-get clean -y

RUN cd /tmp && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

COPY ./public_html/ var/www/html/

CMD /usr/sbin/apache2ctl -D FOREGROUND

WORKDIR /var/www/html
RUN rm index.html && composer install
