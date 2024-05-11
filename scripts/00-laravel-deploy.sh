#!/usr/bin/env bash

echo "Running composer"
composer install
php artisan config:clear
composer dump-autoload -o

echo "Generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache
