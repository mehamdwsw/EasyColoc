<?php

use App\Http\Controllers\ColocationController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckBanned;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::resource('colocations', ColocationController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard')->middleware(CheckBanned::class)->middleware(CheckRole::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
