<?php

use App\Livewire\Front\Home;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PanelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/', Home::class)->name('home');

Route::get('/admin/panel', [PanelController::class,'panel'])->name('admin.panel');

Route::get('/admin/users', [UserController::class,'users'])->name('admin.users');

Route::get('/admin/create/user', [UserController::class,'createUser'])->name('admin.user.create');
