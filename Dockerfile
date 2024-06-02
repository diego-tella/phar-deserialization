FROM php:7.4-apache

WORKDIR /var/www/html
COPY . .
RUN chmod -R 777 /var/www/html/ 
RUN mkdir /var/www/html/phar_lab/uploads
RUN chmod 777 /var/www/html/phar_lab/uploads
EXPOSE 80
