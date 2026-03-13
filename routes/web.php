<?php

use Illuminate\Support\Facades\Route;

Route::domain('{subdomain}.'.config('app.domain'))->group(function () {
    Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('subdomain.index');
    Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'sitemap'])->name('subdomain.sitemap');
    Route::get('/robots.txt', [App\Http\Controllers\SitemapController::class, 'robots'])->name('subdomain.robots');
});

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');//

Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [App\Http\Controllers\SitemapController::class, 'robots'])->name('robots');


