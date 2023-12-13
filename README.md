## Installation process

1. composer install
2. sudo php artisan key:generate
3. php artisan voyager:install
4. php artisan db:seed --class=SubjectsBreadSeeder
5. php artisan db:seed --class=TopicsBreadSeeder
6. php artisan db:seed --class=QuestionsBreadSeeder
7. php artisan db:seed --class=AnswersBreadSeeder
8. php artisan db:seed --class=BreadPermissionsSeeder
9. php artisan voyager:admin admin@admin.com --create
