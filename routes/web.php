<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('invitation');
});

// Undangan
Route::get('/invitation', function () {
    return view('invitation.landing');
})->name('invitation');

// Eksekusi
Route::get('/landing', function () {
    return view('invitation.home');
});
Route::get('/fan', function () {
    return view('invitation.home');
});
