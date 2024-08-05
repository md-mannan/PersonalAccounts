<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('home');
Route::get('/transactions', function () {
    return view('Transactions');
})->name('transactions');
Route::get('/useradd', function () {
    return view('CreateUser');
})->name('createuser');
