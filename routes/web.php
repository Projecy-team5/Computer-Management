<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/test', function () {
//     return view('test');
// })->name('test');
// Route::get('/home', function () {
//     return view('layouts.home');
// })->name('home');

Route::get('/index', function () {
    return view('frontend.index');
})->name('home');

Route::get('/brand', function () {
    return view('frontend.brand');
})->name('brand');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');