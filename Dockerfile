FROM wordpress:php7.1-fpm-alpine
LABEL Maintainer="butlerx <cian@coderdojo.com>"
RUN apk --update --no-cache add curl && \
    rm /var/cache/apk/* && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
COPY [".", "/usr/src/wordpress/wp-content/themes/cd-theme"]
WORKDIR /usr/src/wordpress/wp-content/themes/cd-theme
RUN composer install && \
    chown -R www-data:www-data /usr/src/wordpress/wp-content/plugins/ /usr/src/wordpress/wp-content/themes/
WORKDIR /var/www/html
