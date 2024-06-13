default: migrate seed test

migrate:
    php artisan migrate

seed:
    php artisan db:seed

test:
    php artisan test