#!/bin/bash

# Install dependencies
composer install

# Run migrations
php artisan migrate

# Run seeders
php artisan db:seed

# Run tests
php artisan test
