<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');//

Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'sitemap'])->name('sitemap');
