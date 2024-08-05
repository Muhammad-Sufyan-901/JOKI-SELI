<?php

use App\Models\Proyek;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\GambarProyekController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/detail/{id_proyek}', [LandingPageController::class, 'detail']);

Route::resource('/proyek', ProyekController::class)->name('index', 'proyek')->middleware(['auth', 'verified']);
Route::resource('/testimoni', TestimonialController::class)->middleware(['auth', 'verified']);
Route::resource('/gambarProyek', GambarProyekController::class)->middleware(['auth', 'verified']);


Route::get('gambarProyek/edit/{id_proyek}', [GambarProyekController::class, 'edit'])->name('gambarProyek.edit');

Route::get('/dashboard', function () {
    return view('proyek.index', [
        'proyek' => Proyek::all()->sortByDesc('id_proyek'),
        'testimoni' => Proyek::with('testimoni')->get(),
        'gambarProyek' => Proyek::with('gambarProyek')->get(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Response
Route::get('/response', [App\Http\Controllers\ResponseController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/response', [App\Http\Controllers\ResponseController::class, 'store'])->name('response.store');
