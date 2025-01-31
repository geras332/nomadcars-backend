<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return 123;
});

Route::get('/car/{car}', function () {
    return 123;
});

ROute::get('/test', function (\App\Services\Sitemap\SitemapGenerator $sitemapGenerator) {
    dd($sitemapGenerator->getRoutesWithModelParams());
});
