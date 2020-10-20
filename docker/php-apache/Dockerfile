FROM php:7.3.6-apache-stretch

COPY etc/php/php.ini /usr/local/etc/php
RUN a2enmod rewrite
RUN a2enmod ssl

RUN apt-get update && apt-get install -y vim \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    libxml2-dev \
    libxml2-dev \
    zlib1g-dev \
    libpng-dev \
    libzip-dev \
    gnupg \
    wget \
    git

# Install pdo_mysql, zip, soap, mysqli
RUN docker-php-ext-install pdo \
  pdo_mysql \
  zip \
  soap \
  mysqli \
  gd

# Install opcache
RUN docker-php-ext-install opcache

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php composer-setup.php --install-dir=/usr/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

# Install PHPUNIT
RUN wget https://phar.phpunit.de/phpunit.phar && \
    chmod +x phpunit.phar && \
    mv phpunit.phar /usr/local/bin/phpunit

# Install Xdebug
RUN pecl install xdebug  && \
    docker-php-ext-enable xdebug

# Pdf
RUN apt-get install xvfb libfontconfig wkhtmltopdf -y

EXPOSE 443
