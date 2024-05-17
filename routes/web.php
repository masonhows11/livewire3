<?php

// use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
// admin
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PanelController;
// front
use App\Livewire\Front\Home;
use App\Livewire\Front\CourseDetails;
use App\Livewire\Front\Courses;

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

Route::get('/courses', Courses::class)->name('courses');
Route::get('/course/details', CourseDetails::class)->name('course.details');

Route::get('/admin/panel', [PanelController::class,'panel'])->name('admin.panel');

Route::get('/admin/users', [UserController::class,'users'])->name('admin.users');

Route::get('/admin/create/user', [UserController::class,'createUser'])->name('admin.user.create');
