<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::prefix('articles')->group(function () {
    Route::get('/', function () {return view('article.index');})->name('articles.index');
    Route::get('/{id}', function () {return view('article.show');})->name('articles.show');
});
