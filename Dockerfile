FROM php:8.2-fpm
#FROM php:8.1-fpm-alpine

#RUN docker-php-ext-install pdo pdo_mysql sockets
#RUN curl -sS https://getcomposer.org/installer | php -- \
#     --install-dir=/usr/local/bin --filename=composer
#
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#
#WORKDIR /app
#COPY . .
#RUN composer install

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    software-properties-common \
    npm

#RUN npm install npm@latest -g && \
#    npm install n -g && \
#    n latest

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

USER $user
