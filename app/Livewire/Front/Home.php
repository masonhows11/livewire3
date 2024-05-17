<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Home extends Component
{
    #[layout('front_end.master')]
    public function render()
    {
        return view('livewire.front.home');
    }
}
