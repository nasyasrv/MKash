<?php

use App\Http\Controllers\SalesController;
use App\Models\Sales;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('interface.welcome');
});

// Sales
Route::get('/desktop', [SalesController::class, 'index'])->name('desktop');
Route::get('/product', [SalesController::class, 'product'])->name('sales.product');
Route::get('/sale', [SalesController::class, 'sale'])->name('sales.sale');
Route::get('/preview', [SalesController::class, 'preview'])->name('sales.preview');
Route::get('/print', [SalesController::class, 'print'])->name('sales.print');
Route::get('/profile', [SalesController::class, 'profile'])->name('sales.profile');
Route::get('/calendar', [SalesController::class, 'calendar'])->name('sales.calendar');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home_admin', function () {
    return view('admin.home');
});
