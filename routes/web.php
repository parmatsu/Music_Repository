<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(MusicController::class)->middleware(['auth'])->group(function() {
    Route::get('/', [MusicController::class, 'index'])->name('index');
    Route::get('/bgm', [MusicController::class, 'bgm'])->name('bgm');
    Route::get('/posting', [MusicController::class, 'posting']);
    Route::post('/upload', [MusicController::class, 'upload']);
});
Route::controller(UserController::class)->middleware(['auth'])->group(function() {
    Route::get('/posted_tracks', [UserController::class, 'index'])->name('posted');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
