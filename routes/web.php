<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register/store', [UserController::class, 'storeRegister']);
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login/auth', [UserController::class, 'loginAuth']);
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    // Route::post('/logout', [UserController::class, 'logout']);

    // Route untuk read, update, dan delete
    Route::get('/', [UserController::class, 'index']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/update/{id}', [UserController::class, 'update']);
    Route::delete('/delete/{id}', [UserController::class, 'destroy']);
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});
