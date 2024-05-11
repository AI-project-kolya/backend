#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer update

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force
