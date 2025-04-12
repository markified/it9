<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\MonitoringController;

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

Route::get('/monitoring', function () {
    $bladeFiles = collect(File::allFiles(resource_path('views')))
        ->filter(function ($file) {
            return $file->getExtension() === 'blade.php';
        })
        ->map(function ($file) {
            return [
                'name' => $file->getFilename(),
                'path' => $file->getRelativePathname(),
            ];
        });

    return view('welcome', ['bladeFiles' => $bladeFiles]);
});