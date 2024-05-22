<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class UserList extends Component
{
    use WithPagination,WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    #[Validate('required|min:3|max:30|unique:users')]
    public $name;
    #[Validate('required|min:3|max:30|email|unique:users')]
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


        if ($this->image != null) {
            $name = time() . '.' . $this->image->getClientOriginalExtension();

            $this->image->storeAs('photos',$name,'public');

            // $this->image->store('photos');
        } else {
            $name = null;
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'password' => Hash::make($this->password),
            'image' => $name,

        ]);

        $this->reset('name', 'email', 'image', 'mobile', 'password');
        session()->flash('success', 'کاربر جدید ایجاد شد');
    }

    public function render()
    {
        $users =  User::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->orWhere('mobile', 'like', '%' . $this->search . '%')
            ->paginate(3);

        return view('livewire.admin.user.user-list', ['users' => $users]);
    }
}
