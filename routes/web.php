<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/outlet', function () {
    return view('outlet');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/kategori/handphone', function () {
    return view('kategori/handphone');
});
Route::get('/kategori/tablet', function () {
    return view('kategori/tablet');
});
Route::get('/kategori/smartwatch', function () {
    return view('kategori/smartwatch');
});
Route::get('/kategori/asesoris', function () {
    return view('kategori/asesoris');
});