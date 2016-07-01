FROM php:7.0-fpm

ADD ./laravel.ini /usr/local/etc/php/conf.d
ADD ./laravel.pool.conf /usr/local/etc/php-fpm.d/

RUN curl -sL https://deb.nodesource.com/setup_6.x | bash

RUN echo deb http://http.debian.net/debian jessie-backports main >> /etc/apt/sources.list

RUN apt-get update --fix-missing && apt-get install -y \
	apt-utils \
    libpq-dev \
    libmemcached-dev \
    curl \
    libpng12-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    zlib1g-dev \
    libpng-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libxml2-dev \
    libmagickwand-dev \
    git \
    nodejs \
    unzip \
    bzip2 \
    rsyslog \
    libnotify-bin \
    sudo

RUN pecl install mongodb && docker-php-ext-enable mongodb

# Cleanup container
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Install extensions using the helper script provided by the base image
RUN docker-php-ext-install mbstring pdo_mysql pdo_pgsql zip gd curl intl mcrypt soap opcache json

# install and enable imagick
RUN pecl install imagick && docker-php-ext-enable imagick

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/local/bin
RUN composer global require "hirak/prestissimo:^0.3";

# configure gd library
RUN docker-php-ext-configure gd \
    --enable-gd-native-ttf \
    --with-freetype-dir=/usr/include/freetype2

# Install Memcached for php 7
RUN curl -L -o /tmp/memcached.tar.gz "https://github.com/php-memcached-dev/php-memcached/archive/php7.tar.gz" \
    && mkdir -p /usr/src/php/ext/memcached \
    && tar -C /usr/src/php/ext/memcached -zxvf /tmp/memcached.tar.gz --strip 1 \
    && docker-php-ext-configure memcached \
    && docker-php-ext-install memcached \
    && rm /tmp/memcached.tar.gz

# Install xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.conf

# Install globe node modules
RUN mkdir ~/.npm-global
RUN npm config set prefix '~/.npm-global'
RUN echo "export PATH=~/.npm-global/bin:\$PATH" > ~/.bashrc

RUN npm install -g gulp

# Permissions hack
RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data \
    && chown www-data:www-data /var/www \
    && chsh -s /bin/bash www-data \
    && echo "www-data ALL=(ALL) NOPASSWD:ALL" > /etc/sudoers.d/90-www-data

#RUN chown -R 1000:1000 /var/www
#RUN mkdir -p /var/www/laravel/storage
#RUN chown -R 1000:1000 /var/www/laravel/storage
#VOLUME ["/var/www/laravel/storage"]
#USER www-data

WORKDIR /var/www/laravel

CMD ["sudo", "php-fpm"]

EXPOSE 9000
