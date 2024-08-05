<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Category Route
Route::Resource('/category', CategoryController::class);

// Subcategory Route
Route::Resource('/subcategory', SubCategoryController::class);
