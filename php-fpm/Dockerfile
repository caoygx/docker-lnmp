######
# See: https://hub.docker.com/_/php/
######

FROM php:7.0.5-fpm
MAINTAINER micooz <micooz@hotmail.com>

######
# You can install php extensions using docker-php-ext-install
######

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd


# install swoole
RUN curl -o /tmp/swoole-1.9.0.tgz  http://pecl.php.net/get/swoole-1.9.0.tgz
RUN cd /tmp && tar zxvf swoole-1.9.0.tgz && cd swoole-1.9.0 && \
phpize && ./configure && make && make install && \
cd /tmp && rm -rf /tmp/swoole-1.9.0.tgz
#RUN pecl install swoole
RUN docker-php-ext-enable swoole

