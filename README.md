## Installation process

1. composer install
2. sudo php artisan key:generate
3. php artisan voyager:install
4. php artisan db:seed --class=TopicsBreadSeeder
5. php artisan db:seed --class=ThemesBreadSeeder
6. php artisan db:seed --class=BreadPermissionsSeeder
7. php artisan voyager:admin admin@admin.com --create
