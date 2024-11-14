<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('panel.index');
});
Route::get('catogries', function () {
    return view('panel.catogries');
});
Route::get("categories", function () {
    return view('panel.catogries');
});
Route::post("categories", [CategoriesController::class,"AddCategory"]);

Route::get("details",[CategoriesController::class,"viewdetail"]);
