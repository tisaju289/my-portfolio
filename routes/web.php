<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/aboutPage', [DashboardController::class, 'AboutPage'])->name('about');
Route::get('/portfolioPage', [DashboardController::class, 'PortfolioPage'])->name('portfolio');
Route::get('/servicesPage', [DashboardController::class, 'ServicesPage'])->name('services');
Route::get('/blogPage', [DashboardController::class, 'BlogPage'])->name('blog');
Route::get('/contactPage', [DashboardController::class, 'ContactPage'])->name('contact');




