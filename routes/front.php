<?php

// use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


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
require __DIR__.'/admin.php';

Route::get('/', Home::class)->name('home');

Route::get('/courses', Courses::class)->name('courses');
Route::get('/course/details', CourseDetails::class)->name('course.details');
