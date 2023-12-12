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
            'main_subject_id' => [
                'type'         => 'number',
                'display_name' => 'main_subject_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 4,
            ],
            'secondary_subject_id' => [
                'type'         => 'number',
                'display_name' => 'secondary_subject_id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ],
            'order' => [
                'type'         => 'number',
                'display_name' => 'Порядок темы',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 6,
            ],
            'required_topic_id' => [
                'type'         => 'number',
                'display_name' => 'required_topic_id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 7,
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
                'order'        => 8,
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
                'order'        => 9,
            ],
            'topic_belongsto_topic_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'Обязательная для выполнения тема',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => [
                    'model'       => 'App\\Models\\Topic',
                    'table'       => 'topics',
                    'type'        => 'belongsTo',
                    'column'      => 'required_topic_id',
                    'key'         => 'id',
                    'label'       => 'title',
                    'pivot_table' => 'data_rows',
                    'pivot'       => 0,
                ],
                'order'        => 10,
            ],
            'topic_belongsto_main_subject_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'Основная дисциплина',
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
                'order'        => 11,
            ],
            'topic_belongs_to_secondary_subject_relationship' => [
                'type'         => 'relationship',
                'display_name' => 'Дополнительная дисциплина',
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
                'order'        => 12,
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
