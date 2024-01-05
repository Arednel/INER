<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class DownloadResultTopic extends AbstractAction
{
    public function getTitle()
    {
        return 'Скачать результаты';
    }

    public function getIcon()
    {
        return 'voyager-download';
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
        return route('results_download_from_topic', ['topic_id' => $this->data->id]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'topics';
    }
}
