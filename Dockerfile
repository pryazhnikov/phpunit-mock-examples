FROM php:7.4.16-cli-alpine3.13

# Composer install
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer.phar \
        --install-dir=/usr/local/bin

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY composer.json /app/
COPY composer.lock /app/

# Application environment
WORKDIR /app

# App dependencies installing
RUN composer.phar install

# Copying data
COPY . /app/

# Run tests by default
ENTRYPOINT ["vendor/bin/phpunit"]
