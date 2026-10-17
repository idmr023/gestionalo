#!/bin/sh
php artisan migrate --force
# Remove any existing storage link or directory before creating symlink
if [ -L public/storage ]; then
    rm public/storage
fi
if [ -d public/storage ]; then
    rm -rf public/storage
fi
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Background scheduler: keeps the DB warm (Neon autosuspend) every 5 minutes.
( while true; do php artisan schedule:run >/dev/null 2>&1; sleep 60; done ) &

php artisan serve --host=0.0.0.0 --port=10000
