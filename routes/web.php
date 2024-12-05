<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/coaches', [PageController::class, 'coaches'])->name('coaches');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/help', [PageController::class, 'help'])->name('help');
});
