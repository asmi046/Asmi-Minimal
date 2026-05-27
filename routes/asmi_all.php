<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/page/{slug}', [PageController::class, 'index'])->name('page');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
