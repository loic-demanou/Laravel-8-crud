<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('crud', [ProductController::class, 'index'])->name('index');
Route::get('create', [ProductController::class, 'create'])->name('product.create');
Route::post('create', [ProductController::class, 'store'])->name('product.store');
Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('edit/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('product/show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');






