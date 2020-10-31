<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', App\Http\Livewire\Registration::class)->name('register');
Route::get('/login', App\Http\Livewire\Login::class)->name('login');