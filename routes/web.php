<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('sangraha');
});

// routes/web.php
Route::get('/home', function () {
    return view('sangraha');
})->name('sangraha.index');

Route::get('/fiksi', function () {
    return view('fiksi');
})->name('fiksi.index');

Route::get('/nonfiksi', function () {
    return view('nonfiksi');
})->name('nonfiksi.index');

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::get('/login', function () {
    return view('login');
})->name('login.index');

Route::get('/signup', function () {
    return view('signup');
})->name('signup.index');

Route::get('/detailbuku', function () {
    return view('detailbuku');
})->name('detailbuku.index');
