FROM composer AS installer

RUN composer global require "hirak/prestissimo"

ADD . /app
RUN chmod -R 0744 /app

WORKDIR /app

RUN composer install

FROM php:7.2-fpm-alpine AS app

ADD . /var/www/html/app/public

RUN set -x \
    && apk --no-cache add \
    postgresql-dev

RUN docker-php-ext-install \
    pdo \
    pdo_pgsql

COPY --from=installer /app/vendor /var/www/html/vendor

CMD [ "php", "-S", "0.0.0.0:9000", "-t", "public" ]