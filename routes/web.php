<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\LowStockController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
Route::get('/low-stock', [LowStockController::class, 'index'])->name('low-stock.index');
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