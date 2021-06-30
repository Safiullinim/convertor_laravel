<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConvertorController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/convertor', function () {
    return view('convertor');
})->name('convertor');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
Route::get('/convertor/submit', [ConvertorController::class, 'submit'])->name('convertor-form');
