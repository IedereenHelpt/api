FROM alpine:3.11

LABEL maintainer="Yordi Pauptit <yordi@yordipauptit.com>"

RUN adduser -D -h /home/php -u 9001 php

RUN apk add --no-cache php7 \
    php7-fpm \
    php7-opcache \
    php7-pdo \
    php7-pdo_mysql \
    php7-json \
    php7-session \
    php7-tokenizer \
    php7-openssl

RUN mkdir -p /var/log/php7 && \
    chown -R php /var/log/php7 && \
    chmod -R g+w /var/log/php7

COPY . /var/www/html

COPY docker/php/config/php.ini /etc/php7/php.ini
COPY docker/php/config/www.conf /etc/php7/php-fpm.d/www.conf

RUN chown -R php:php /var/www/html
RUN chmod -R g+w /var/www/html

USER php
WORKDIR /var/www/html

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7","--nodaemonize"]
