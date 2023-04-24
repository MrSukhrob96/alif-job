FROM php:8.2-apache

RUN apt-get update

# Install important libraries
RUN apt-get -y install --fix-missing \
    apt-utils \
    build-essential \
    git \
    curl \
    libcurl4 \
    libcurl4-openssl-dev \
    zlib1g-dev \
    libzip-dev \
    zip \
    libbz2-dev \
    locales \
    libmcrypt-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    sendmail \
    sendmail-bin \
    sendmail-cf

# Install important docker dependencies
RUN docker-php-ext-install \
    exif \
    pcntl \
    bcmath \
    ctype \
    curl \
    iconv \
    xml \
    soap \
    pcntl \
    mbstring \
    tokenizer \
    bz2 \
    zip \
    intl \
    mysqli \
    pdo_mysql \
    opcache

# Install and enable the SMTP module
RUN docker-php-ext-configure \
    smtp \
    --host=smtp.gmail.com \
    --enable-smtp \
    --with-stream-ssl \
    --with-stream-ssl-peer-name=smtp.gmail.com \
    --with-password=Spitamen1111 \
    --with-username=sukhrobazimov1996@gmail.com \
    && docker-php-ext-install smtp

# Install and configure phpMyAdmin
RUN apt-get -y install phpmyadmin \
    && rm -rf /var/lib/apt/lists/* \
    && ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin \
    && echo "Include /etc/phpmyadmin/apache.conf" >> /etc/apache2/apache2.conf

# Set the working directory
WORKDIR /var/www/html
