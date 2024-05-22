<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;

class UserList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Validate('required|min:3|max:25|email|unique:users')]
    public $name;
     #[Validate('required|min:3|max:25|email|unique:users')]
    public $email;
    #[Validate('required|digits:11')]
    public $mobile;
    #[Validate('required|min:6|max:20')]
    public $password;
    #[Validate('nullable|sometimes|max:2048')]
    public $image;

    public $search;



    public function save()
    {

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'password' => Hash::make($this->password),
            'image' => '',

            ]);

            $this->reset('name','email','image','mobile','password');
            session()->flash('success','کاربر جدید ایجاد شد');
    }

    public function render()
    {

        return view('livewire.admin.user.user-list',['users' => User::query()->paginate(3)]);
    }
}
