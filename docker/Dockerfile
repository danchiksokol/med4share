FROM php:5.6-apache
RUN docker-php-ext-install mysql
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y mc
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer
RUN apt-get install -y git

RUN apt-get install -y libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        graphviz \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install zip \
    && docker-php-source delete



RUN a2enmod rewrite


# Install opcache extension for PHP accelerator
RUN docker-php-ext-install opcache \
    && docker-php-ext-enable opcache \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get autoremove -y

RUN pecl install xdebug-2.5.5 \
    && docker-php-ext-enable xdebug \

RUN echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20131226/xdebug.so" >> /usr/local/etc/php/php.ini;
RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/xdebug.ini;
RUN echo 'date.timezone = "UTC"' >> /usr/local/etc/php/php.ini
RUN echo 'opcache.max_accelerated_files = 20000' >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini

RUN apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl