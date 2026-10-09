<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Bonus: route dengan parameter
Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
})->name('hello');
