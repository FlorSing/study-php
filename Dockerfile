# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the application files into the container
COPY . /xampp/htdocs/studyPHP

# Set the working directory in the container
WORKDIR /xampp/htdocs/studyPHP

# Install necessary PHP extensions
# RUN apt-get update && apt-get install -y \
#     libicu-dev \
#     libzip-dev \
#     && docker-php-ext-install \
#     intl \
#     zip \
#     && a2enmod rewrite

# Expose port 80
EXPOSE 443

# Define the entry point for the container
CMD ["./index.php"]
