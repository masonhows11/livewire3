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

    #[Validate('required|min:3|max:30|unique:users,name')]
    public $name;
    #[Validate('required|min:3|max:30|email|unique:users,email')]
    public $email;
    #[Validate('required|digits:11|unique:users,mobile')]
    public $mobile;

    #[Validate('required|min:6|max:20')]
    public $password;
    #[Validate('nullable|sometimes|max:2048')]
    public $image;

    public $search;

    public $user_id = null;
    public $user = null;
    public $edit_mode = null;


    public function edit($user_id)
    {


        $user = User::findOrFail($user_id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->mobile = $user->mobile;
        $this->user_id = $user_id;
        $this->user = $user;
        // $this->password = $user->password;


    }


    public function save()
    {

        if($this->edit_mode == 'null')
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
        } else {


            $this->validate([

                'name' => 'required|min:3|max:30|unique:users,name,'.$this->user_id,
                'email' => 'required|min:3|max:30|unique:users,email,'.$this->user_id,
                'mobile' => 'required|min:11|max:11|unique:users,mobile,'.$this->user_id,
                'password' => 'nullable|min:6|max:20',
                'image' => 'nullable|sometimes|max:2048',
            ]);

            if ($this->image != null) {
                $name = time() . '.' . $this->image->getClientOriginalExtension();

                $this->image->storeAs('photos',$name,'public');

                // $this->image->store('photos');
            } else {
                $name = null;
            }

            User::where('id',$this->user_id)->update([
                'name' => $this->name,
                'email' => $this->email,
                'mobile' => $this->mobile,
                'password' => $this->password ? Hash::make($this->password) : $this->user->password,
                'image' => $this->image ? $name : $this->user->image,

            ]);

            $this->reset('name', 'email', 'image', 'mobile', 'password');
            session()->flash('success', 'کاربر با موفقیت بروز رسانی شد');

        }


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
