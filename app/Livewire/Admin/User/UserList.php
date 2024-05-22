<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Hash;

class UserList extends Component
{
    use WithPagination,WithoutUrlPagination;
    protected $paginationTheme="bootstrap";

    public $name;
    public $email;
    public $mobile;
    public $password;
    public $image;
    public $search;



    public function save(){

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'password' => Hash::make($this->password),
            'image' => '',

            ]);
            session()->flash('success','کاربر جدید ایجاد شد');
    }

    public function render()
    {

        return view('livewire.admin.user.user-list',['users' => User::query()->paginate(2)]);
    }
}
