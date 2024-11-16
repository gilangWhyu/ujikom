<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\NovelController;

Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login.tampil', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');


Route::get('home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('novel', [NovelController::class, 'index'])->name('novel');
    Route::get('comic', [ComicController::class, 'index'])->name('comic');
    Route::get('agama', [AgamaController::class, 'index'])->name('agama');
    
Route::get('/history', function () {
    return view('history');
})->name('history');
});

Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard');
})->name('/admin/dashboard');