<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/coach', function () {
    return view('coach');
})->name('coach');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
