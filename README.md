## Installation process

1. composer install
2. sudo php artisan key:generate
3. php artisan migrate
4. php artisan voyager:install
5. php artisan db:seed --class=SubjectsBreadSeeder
6. php artisan db:seed --class=TopicsBreadSeeder
7. php artisan db:seed --class=QuestionsBreadSeeder
8. php artisan db:seed --class=AnswersBreadSeeder
9. php artisan db:seed --class=UserTopicResultsBreadSeeder
10. php artisan db:seed --class=TopicTasksBreadSeeder
11. php artisan db:seed --class=UserTaskAnswersBreadSeeder
12. php artisan db:seed --class=BreadPermissionsSeeder
13. php artisan voyager:admin admin@admin.com --create
