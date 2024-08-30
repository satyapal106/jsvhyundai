<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::get('/', [HomeController::class, 'Index']);
Route::get('/request-a-test-drive', [HomeController::class, 'TestDrive']);
Route::get('/grand-i10-nios', [HomeController::class, 'CarDetail']);
Route::get('/contact-us', [HomeController::class, 'Contact']);
Route::get('/about-us', [HomeController::class, 'About']);
Route::get('/request-a-brochure', [HomeController::class, 'Brochure']);
Route::get('/services', [HomeController::class, 'Services']);

Route::get('/admin/login', [AdminController::class, 'Login']);
Route::get('/dashboard', [AdminController::class, 'Dashboard']);