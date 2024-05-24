<?php

namespace App\Livewire\Admin\Alpine;

use Livewire\Component;

class AlpineJs extends Component
{
    public function render()
    {
        return view('livewire.admin.alpine.alpine-js')
        ->extends('admin_end.include.master')
        ->section('panel_main_content');
    }
}
