FROM composer:latest

# Copy entire application to app directory in the container
WORKDIR /app
COPY . .

# Install Packages
RUN composer install

RUN docker-php-ext-install pdo_mysql

# Migrate Database and Execute Application

CMD php -S 0.0.0.0:80 -t public

EXPOSE 80