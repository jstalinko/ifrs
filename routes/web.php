<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/dashboard');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authLogin'])->name('auth.login');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::group(['prefix' => '/product'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create' , [ProductController::class , 'create'])->name('product.create');
        Route::post('/store' , [ProductController::class , 'store'])->name('product.store');
        Route::get('/edit/{id}' , [ProductController::class , 'edit'])->name('product.edit');
        Route::post('/update/{id}' , [ProductController::class , 'update'])->name('product.update');
        Route::get('/delete/{id}' , [ProductController::class , 'destroy'])->name('product.delete');
    });

    Route::group(['prefix' => '/category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    });
});
