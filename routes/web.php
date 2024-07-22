<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\VoteController;

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
    return view('layouts.main.home');
})->name('home');


Route::middleware(['auth'])->group(function () {
    Route::prefix('leaderboard')->group(function () {
        Route::get('/', [LeaderboardController::class, 'showLeadPage'])->name('lead.page');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});



Route::middleware(['auth'])->group(function () {
    Route::prefix('vote')->group(function () {
        Route::get('/', [VoteController::class, 'showVotePage'])->name('vote.page');
        Route::post('/vote/{character}', [VoteController::class, 'voteForCharacter'])->name('vote.character');
        // Route::post('/vote/{character}', [VoteController::class, 'voteForCharacter'])->name('vote.character');
        Route::post('/store/{id}', [VoteController::class, 'storeVote']);
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});





Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'register']);
    Route::post('/register/store', [UserController::class, 'storeRegister']);
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login/auth', [UserController::class, 'loginAuth']);
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    // Route untuk read, update, dan delete
    Route::get('/', [UserController::class, 'index']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
    Route::post('/update/{id}', [UserController::class, 'update']);
    Route::delete('/delete/{id}', [UserController::class, 'destroy']);
});

Route::prefix('dashboard')->middleware(['auth', 'checkAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('hero')->group(function () {
        Route::get('/', [HeroController::class, 'index']);
        Route::get('/create', [HeroController::class, 'create']);
        Route::get('/edit/{id}', [HeroController::class, 'edit']);
        Route::delete('/delete/{id}', [HeroController::class, 'destroy']);
        Route::post('/store', [HeroController::class, 'store']);
        Route::post('/update/{id}', [HeroController::class, 'update']);
    });
});
