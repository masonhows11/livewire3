<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public $search;

    #[JS]
    public function resetSearch()
    {
        return <<<'JS'
        $wire.search = '';
        JS;
        //
    }

    public function placeholder()
    {
        return view('livewire.admin.user.lazy');
    }

    public function render()
    {
        // $this->js("alert('page reload')");
        // sleep(5);
        $users =  User::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('mobile', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin.user.users',['users' => $users]);
    }
}
