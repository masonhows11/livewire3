<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'fucckkkkkker';

    public function render()
    {
        return view('livewire.create-post')->with(['title' => $this->title]);
    }
}
