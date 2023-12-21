<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class CreateQuestion extends AbstractAction
{
    public function getTitle()
    {
        return 'Посмотреть вопросы';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('topic_questions', ['topic_id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'topics';
    }
}
