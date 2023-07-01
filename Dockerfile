FROM php:8.2-apache

EXPOSE 80

RUN docker-php-ext-install mysqli

COPY . /var/www/html/


ENV HOST=containers-us-west-163.railway.app
ENV USER=root
ENV PASSWORD=qqoR1S9nP2zPFnCkoE0l
ENV DATABASE=railway
ENV PORT=6289

ENV ADMIN_NAME=sebas
ENV ADMIN_PASSWORD=sebas123


RUN php migrate.php

CMD ["apache2-foreground"]