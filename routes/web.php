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
Route::get('/contact/all/{id}', [ContactController::class, 'oneMessage'])->name('contact-data-one');
Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');
Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');
Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');
Route::get('/contact/all', [ContactController::class, 'allData'])->name('contact-data');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact-form');
Route::get('/convertor/submit', [ConvertorController::class, 'submit'])->name('convertor-form');
