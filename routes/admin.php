<?php

use Illuminate\Support\Facades\Route;

use App\Http\Models\Apprentice;
use App\Http\Models\Product;

Route::get('/users', [App\Http\Controllers\ApprenticeController::class, 'index'])->name('users');
Route::get('/users/add', [App\Http\Controllers\ApprenticeController::class, 'getusersadd'])->middleware('can:admin.users.add')->name('admin.users.add');
Route::post('/users/add', [App\Http\Controllers\ApprenticeController::class, 'postusersadd'])->name('users.add');
Route::get('/users/edit/{id}', [App\Http\Controllers\ApprenticeController::class, 'getusersedit'])->middleware('can:admin.users.edit')->name('admin.users.edit');
Route::post('/users/edit/{id}', [App\Http\Controllers\ApprenticeController::class, 'postusersedit'])->name('users.edit');
Route::get('/users/delete/{id}', [App\Http\Controllers\ApprenticeController::class, 'getusersdelete'])->middleware('can:admin.users.delete')->name('admin.users.delete');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->middleware('can:admin.products')->name('admin.products');
Route::get('/products/add', [App\Http\Controllers\ProductController::class, 'getproductsadd'])->middleware('can:admin.products.add')->name('admin.products.add');
Route::post('/products/add', [App\Http\Controllers\ProductController::class, 'postproductsadd'])->name('products.add');
Route::get('/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'getproductsedit'])->middleware('can:admin.products.edit')->name('admin.products.edit');
Route::post('/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'postproductsedit'])->name('products.edit');
Route::get('/products/delete/{id}', [App\Http\Controllers\ProductController::class, 'getproductsdelete'])->middleware('can:admin.products.delete')->name('admin.products.delete');
