<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ContactController;

Route::get('/',        [HomeController::class,   'index'])->name('home');
Route::get('/photos',  [PhotosController::class,  'index'])->name('photos');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');