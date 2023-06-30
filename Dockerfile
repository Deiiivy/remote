FROM php:8.2-apache

EXPOSE 80

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

ENV HOST=containers-us-west-32.railway.app
ENV USER=root
ENV PASSWORD=6m9ep4mAzdDl9HtNcMwf
ENV DATABASE=railway
ENV PORT=6294

ENV ADMIN_NAME=6294
ENV ADMIN_PASSWORD=6294


RUN php migrate.php

CMD ["apache2-foreground"]