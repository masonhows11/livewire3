<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function users(){

        return view('admin_end.users.user_list');

    }



    public function createUser(){
        return view('admin_end.users.create_user');
    }
}
