<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class WatchResultsTopic extends AbstractAction
{
    public function getTitle()
    {
        return 'Посмотреть результаты';
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
            'style' => 'margin-right:5px;'
        ];
    }

    public function getDefaultRoute()
    {
        return route('topic_results', ['topic_id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'topics';
    }
}
