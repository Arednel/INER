<?php

namespace App\Livewire;

use Livewire\Component;

class IndexPage extends Component
{
    public $currentView = 'index.main-page';

    public function render()
    {
        return view('index.menu');
    }

    public function changeView($view_name)
    {
        $this->currentView = "index." . $view_name;
    }
}
