FROM nginx:alpine
RUN addgroup -g 82 -S www-data && \
    adduser -u 82 -D -S -G www-data www-data && \
    mkdir -p /var/www/html && \
    chown -R www-data:www-data /var/www
