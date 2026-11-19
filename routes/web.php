<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// // Trasy dla rejestracji (wyświetlanie formularza)
// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'showForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
