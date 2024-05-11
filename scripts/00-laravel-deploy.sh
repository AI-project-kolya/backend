#!/usr/bin/env bash
echo "Running composer"
composer update ramsey/uuid

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

