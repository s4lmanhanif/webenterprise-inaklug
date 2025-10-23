<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang');

Route::get('/layanan-kami', function () {
    return view('layanan-kami');
})->name('layanan');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/hubungi-kami', function () {
    return view('hubungi-kami');
})->name('hubungi');