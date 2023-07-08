<?php

namespace App\Http\Livewire\News;

use App\Models\News;
use Livewire\Component;
use App\Models\NewsPart;

class CreateForm extends Component
{
    public $news;
    public $news_title;

    public $news_parts;
    public $news_parts_number = 0;

    protected $rules = [
        'news.title' => 'required|min:1',
        'news_parts.*.data' => 'required|min:1',
    ];

    public function boot()
    {
        $news = News::create();

        $this->updateNewsPart($news);
    }

    private function updateNewsPart($news)
    {
        $this->news = $news;

        $this->news_parts = NewsPart::where('news_id', $news->id)
            ->get();
    }

    public function render()
    {
        return view('livewire.news.create-form', ['news_parts' => $this->news_parts]);
    }

    public function addText()
    {
        NewsPart::create(
            [
                'news_id' => $this->news->id,
                'number' => $this->news_parts_number,
                'type' => 'text',
            ]
        );

        $this->updateNewsPart($this->news);

        $this->news_parts_number++;
    }

    public function removeText($id)
    {
        NewsPart::destroy($id);

        $this->updateNewsPart($this->news);
    }

    public function save()
    {
        $this->validate();

        $this->news->save();
    }

    public function saveText($id)
    {
        $this->validate();

        $this->news_parts[$id]->save();
    }
}
