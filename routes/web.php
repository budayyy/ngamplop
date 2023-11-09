<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmplopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserController;

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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return 'ini adalah halaman about';
})->name('about');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/auth/redirect', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleCallbackGoogle']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // amplop
    Route::resource('/amplop', AmplopController::class);
});

// halaman untuk admin
Route::middleware('isAdmin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__ . '/auth.php';
