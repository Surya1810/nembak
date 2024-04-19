<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('execution.landing');
});

Route::get('/welcome', function () {
    return view('execution.welcome');
})->name('welcome');

Route::get('/games', function () {
    return view('execution.login');
})->name('games');

Route::post('/games/store', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::get('/berhasil', function () {
    return view('execution.berhasil');
})->name('berhasil');

Route::get('/aura', function () {
    return view('execution.fan');
})->name('aura');

Route::get('/misterius', function () {
    return view('execution.curhat');
})->name('surya');

Route::get('/ending', function () {
    return view('execution.ending');
})->name('ending');

Route::get('/find', function () {
    return view('execution.find');
})->name('find');
