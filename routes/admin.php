<?php

// use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
// admin
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\UserController;
use App\Livewire\Admin\Alpine\AlpineJs;

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


Route::get('/panel', [PanelController::class, 'panel'])->name('admin.panel');

Route::get('/users', [UserController::class, 'users'])->name('admin.users');

Route::get('/create/user', [UserController::class, 'createUser'])->name('admin.user.create');

Route::get('/alpine',AlpineJs::class)->name('admin.alpine');
    // Route::get('/admin/panel', [PanelController::class,'panel'])->name('admin.panel');

    // Route::get('/admin/users', [UserController::class,'users'])->name('admin.users');

    // Route::get('/admin/create/user', [UserController::class,'createUser'])->name('admin.user.create');
