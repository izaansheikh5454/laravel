<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('panel.index');
});
Route::get('catogries', function () {
    return view('panel.catogries');
});
