<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/suppliers', function () {
    return view('suppliers');
});
Route::get('/low-stock', function () {
    return view('low-stock');
});
Route::get('/purchase-orders', function () {
    return view('purchase-orders');
});
use App\Http\Controllers\RegistrationController;


Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');

Route::post('/register', [RegistrationController::class, 'submitForm'])->name('register.submit');

Route::get('/success', [RegistrationController::class, 'successPage'])->name('register.success');
