<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Custom Login
Route::get('/login', [AuthController::class,'loginform'])->name('loginform');
Route::post('/login', [AuthController::class,'login'])->name('login');

// Custom Registration
Route::get('/register', [AuthController::class,'registerform'])->name('registerform');
Route::post('/register', [AuthController::class,'register'])->name('register');
Route::any('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('home',[AuthController::class,'home'])->name('home')->middleware('auth');