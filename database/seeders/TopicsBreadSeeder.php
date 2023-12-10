<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use VoyagerBread\Traits\BreadSeeder;

class TopicsBreadSeeder extends Seeder
{
    use BreadSeeder;

    public function bread()
    {
        return [
            // usually the name of the table
            'name'                  => 'topics',
            'slug'                  => 'topics',
            'display_name_singular' => 'Тема',
            'display_name_plural'   => 'Темы',
            'icon'                  => 'voyager-categories',
            'model_name'            => 'App\Models\Topic',
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
            'title' => [
                'type'         => 'text',
                'display_name' => 'Название темы',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 2,
            ],
            'body' => [
                'type'         => 'rich_text_box',
                'display_name' => 'Тема',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
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
                'order'        => 4,
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
                'order'        => 5,
            ],
            'topic_belongsto_main_subject_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'Основная тема',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'App\\Models\\Subject',
                    'table'       => 'subjects',
                    'type'        => 'belongsTo',
                    'column'      => 'main_subject_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'data_rows',
                    'pivot'       => 0,
                ],
                'order'        => 6,
            ],
            'topic_belongsto_secondary_subject_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'Дополнительная тема',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'App\\Models\\Subject',
                    'table'       => 'subjects',
                    'type'        => 'belongsTo',
                    'column'      => 'secondary_subject_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'data_rows',
                    'pivot'       => 0,
                ],
                'order'        => 7,
            ],
            'main_subject_id' => [
                'type'         => 'number',
                'display_name' => 'main_subject_id',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'App\\Models\\Subject',
                    'table'       => 'subjects',
                    'type'        => 'belongsTo',
                    'column'      => 'secondary_subject_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'data_rows',
                    'pivot'       => 0,
                ],
                'order'        => 7,
            ],
        ];
    }

    public function menuEntry()
    {
        return [
            'role'        => 'admin',
            'title'       => 'Темы',
            'url'         => '',
            'route'       => 'voyager.topics.index',
            'target'      => '_self',
            'icon_class'  => 'voyager-categories',
            'color'       => null,
            'parent_id'   => null,
            'parameters' => null,
            'order'       => 5,
        ];
    }
}
