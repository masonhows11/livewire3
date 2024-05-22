<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";

    public function render()
    {

        return view('livewire.admin.user.user-list',['users' => User::query()->paginate(10)]);
    }
}
