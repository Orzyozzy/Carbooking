<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\BookingController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
*/

Route::get('/', function ()
{
    return view('homepage');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

Route::controller(BookingController::class)->group(function () {
Route::post('add', 'addData')->middleware('auth')->name('add');
});

Route::prefix('admin')->group(function()
{ 
Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@Login')->name('admin.login.submit');
Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.page');
});