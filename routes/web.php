<?php

use App\Http\Controllers\GambarProyekController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/detail/{id_proyek}', [LandingPageController::class, 'detail']);

Route::resource('/proyek', ProyekController::class);
Route::resource('/testimoni', TestimonialController::class);
Route::resource('/gambarProyek', GambarProyekController::class);

Route::get('gambarProyek/edit/{id_proyek}', [GambarProyekController::class, 'edit'])->name('gambarProyek.edit');