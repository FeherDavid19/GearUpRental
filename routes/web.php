<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\FlottaController;
use App\Http\Controllers\FoglalasController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;

// Kezdőlap
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Főoldal
Route::get('/fooldal', [HomeController::class, 'fooldal'])->name('fooldal');

// Szolgáltatások
Route::get('/szolgaltatasok', function () {
    return view('szolgaltatasok');
})->name('szolgaltatasok');

// Kapcsolat
Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');

// Bejelentkezés és regisztráció
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Flotta
Route::get('/flotta', [FlottaController::class, 'index'])->name('flotta');

// Laravel Auth útvonalak
Auth::routes();

// Jelszó visszaállítás
Route::get('/password/confirm', function () {
    return view('auth.passwords.confirm');
})->name('password.confirm');

Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Foglalás mentése
Route::post('/foglalas', [FoglalasController::class, 'submit'])->name('foglalas.submit');

// Vélemények
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// Dashboard (Foglalásaim)
Route::get('/dashboard', [FoglalasController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Foglalásaim (külön útvonal)
Route::get('/foglalasaim', [FoglalasController::class, 'dashboard'])->middleware('auth')->name('foglalasaim');

// Foglalás törlése
Route::delete('/foglalas/{id}', [FoglalasController::class, 'torles'])->name('foglalas.torles');


Route::post('/foglalas/submit', [FoglalasController::class, 'submit'])->name('foglalas.submit');

Route::get('/foglalas/{id}', [FoglalasController::class, 'foglalasForm'])->name('foglalas.form');

Route::get('/flotta', [FlottaController::class, 'showFlotta'])->name('flotta');