FROM php:8.2-fpm-alpine

# Install nginx and required PHP extensions
RUN apk add --no-cache nginx \
    && docker-php-ext-install pdo_mysql opcache

# Configure nginx
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/http.d/default.conf

# Configure PHP
RUN mkdir -p /var/run/php-fpm/ \
    && touch /var/run/php-fpm/php-fpm.pid

# Create directory for the application
RUN mkdir -p /var/www/html

# Copy application files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Configure permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 8080
EXPOSE 8080

# Copy the entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Start nginx and php-fpm
ENTRYPOINT ["docker-entrypoint.sh"]