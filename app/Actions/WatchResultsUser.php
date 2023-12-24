<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class WatchResultsUser extends AbstractAction
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
        return route('user_results', ['user_id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'users';
    }
}
