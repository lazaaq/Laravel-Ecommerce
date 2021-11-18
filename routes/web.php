<?php

use App\Http\Controllers\MyProductController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/my', [MyProductController::class, 'index'])->middleware('auth');
Route::post('/my', [MyProductController::class, 'addpost'])->middleware('auth');
Route::get('/my/{myproduct:slug}', [MyProductController::class, 'product'])->middleware('auth');
Route::get('/add', [MyProductController::class, 'addget'])->middleware('auth');
Route::get('/edit/{myproduct:id}', [MyProductController::class, 'editget'])->middleware('auth');
Route::post('/edit/{myproduct:id}', [MyProductController::class, 'editpost'])->middleware('auth');
Route::get('/delete/{myproduct:id}', [MyProductController::class, 'delete'])->middleware('auth');
