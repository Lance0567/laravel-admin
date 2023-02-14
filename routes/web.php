<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Mananagement

Route::get('/all-user', [App\Http\Controllers\backend\UserController::class, 'AllUser'])->name('alluser');
Route::get('/add-user-index', [App\Http\Controllers\backend\UserController::class, 'AddUserIndex'])->name('addUserIndex');
Route::post('/insert-user', [App\Http\Controllers\backend\UserController::class, 'InsertUser'])->name('insertUser');

// Charts
Route::get('/chartJs', [App\Http\Controllers\backend\ChartController::class, 'ChartJs'])->name('chartjs');
