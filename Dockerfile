FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql pgsql mbstring exif pcntl bcmath gd opcache

# Raise upload limits (Laravel uploads: brochure PDF up to 20MB, images up to 5MB)
RUN { \
      echo 'upload_max_filesize=25M'; \
      echo 'post_max_size=30M'; \
      echo 'max_file_uploads=20'; \
      echo 'max_execution_time=180'; \
      echo 'memory_limit=512M'; \
    } > /usr/local/etc/php/conf.d/uploads.ini

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Install Node dependencies and build assets, remove hot file if present
RUN npm install && npm run build \
    && rm -f public/hot

# Set permissions and storage link
RUN chmod -R 775 storage bootstrap/cache \
    && chmod -R 755 public \
    && php artisan storage:link --ansi || true

# Make start script executable
RUN chmod +x start.sh

EXPOSE 10000

CMD ["./start.sh"]
