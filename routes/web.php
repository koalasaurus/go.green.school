<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalkulator', function () {
    return view('kalkulator');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
