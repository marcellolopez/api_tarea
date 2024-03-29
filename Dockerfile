FROM php:7.4-fpm
RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/html
COPY . .
RUN composer install --no-interaction --no-plugins --no-scripts
RUN chmod -R 775 storage bootstrap/cache
EXPOSE 9000
CMD ["php-fpm"]
