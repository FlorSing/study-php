FROM php:7.4-apache
COPY . /xampp/htdocs/studyPHP

WORKDIR /xampp/htdocs/studyPHP

RUN apt-get update && apt-get installl -y \ 
libicu-dev \ 
libzip-dev \
&& deocker-php-ext-install \
intl \
zip \
&& a2enmod rewrite

EXPOSE 80

CMD ["php", "./index.php"]
