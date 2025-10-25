<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\HomeController;
use Modules\Admin\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});



Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegister'])->name('admin.register');
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    });
});

// HomeController will be generated automatically by the module generator 

