<?php

// use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;



use App\Livewire\Front\Home;


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
require __DIR__.'/front.php';

Route::get('/', Home::class)->name('home');




