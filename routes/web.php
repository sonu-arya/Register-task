<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('register',[RegisterController::class,'index']);
Route::post('register/store',[RegisterController::class,'store'])->name('register.store');

Route::get('user/view',[UserController::class,'index']);
Route::post('user/edit',[UserController::class,'update'])->name('user.edit');
Route::get('user/delete/{id}',[UserController::class,'destroy']);
