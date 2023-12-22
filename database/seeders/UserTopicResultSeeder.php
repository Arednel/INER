<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use VoyagerBread\Traits\BreadSeeder;

class UserTopicResultSeeder extends Seeder
{
    use BreadSeeder;

    public function bread()
    {
        return [
            // usually the name of the table
            'name'                  => 'usertopicresults',
            'slug'                  => 'usertopicresults',
            'display_name_singular' => 'Результат',
            'display_name_plural'   => 'Результаты',
            'icon'                  => 'voyager-categories',
            'model_name'            => 'App\Models\UserTopicResult',
            'controller'            => null,
            'generate_permissions'  => 1,
            'description'           => null,
            'details'               => [
                "order_column" => null,
                "order_display_column" => null,
                "order_direction" => "asc",
                "default_search_key" => null
            ]
        ];
    }

    public function inputFields()
    {
        return [
            'id' => [
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ],
            'user_id' => [
                'type'         => 'number',
                'display_name' => 'user_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 2,
            ],
            'topic_id' => [
                'type'         => 'number',
                'display_name' => 'topic_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ],
            'max_score' => [
                'type'         => 'number',
                'display_name' => 'max_score',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ],
            'user_score' => [
                'type'         => 'number',
                'display_name' => 'user_score',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ],
            'user_score_to_hundred' => [
                'type'         => 'number',
                'display_name' => 'Балл',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ],
            'user_topic_result_belongsto_user_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'ФИО',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'App\\Models\\User',
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'question_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'data_rows',
                    'pivot'       => 0,
                ],
                'order'        => 4,
            ],
            'created_at' => [
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 6,
            ],
            'updated_at' => [
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 7,
            ],
        ];
    }

    public function menuEntry()
    {
        return [
            'role'        => 'admin',
            'title'       => 'Результаты',
            'url'         => '',
            'route'       => 'voyager.usertopicresults.index',
            'target'      => '_self',
            'icon_class'  => 'voyager-categories',
            'color'       => null,
            'parent_id'   => null,
            'parameters' => null,
            'order'       => 7,
        ];
    }
}
