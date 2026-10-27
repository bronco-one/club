<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
})->name('home');
// Funkcje / O klubie
Route::get('/features', function () {
    return view('features');
})->name('features');

// Cennik / Pakiety członkowskie
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

// Trasy dla logowania (wyświetlanie formularza)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Trasy dla rejestracji (wyświetlanie formularza)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');