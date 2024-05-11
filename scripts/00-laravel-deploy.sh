#!/usr/bin/env bash

echo "Running composer"
composer install  # Use 'install' instead of 'update' to ensure dependencies are installed as expected

echo "Generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache
