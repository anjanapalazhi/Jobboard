<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/regiterform',[AuthController::class, 'registerform'])->name('registerform');

Route::get('/login',[AuthController::class, 'login'])->name('login');






Route::get('/admin-dashboard',[AdminController::class, 'adminindex'])->name('adminindex');