<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})-> name('contact');

route::get('/blog', function () {
    return view('blog');
})-> name('blog');



Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/categories',[CategoryController::class,'index']);
