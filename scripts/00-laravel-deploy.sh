#!/usr/bin/env bash
echo "Running composer"
composer self-update 2.1.14
composer install

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

