<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ReviewTaskAnswer extends AbstractAction
{
    public function getTitle()
    {
        return 'Оценить ответ';
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
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin-right:5px;'
        ];
    }

    public function getDefaultRoute()
    {
        return route('review_task_answer', ['task_id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'user-task-answers';
    }
}
