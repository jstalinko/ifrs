<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;

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

    Route::group(['prefix' => '/supplier'] , function(){
        Route::get('/' , [SupplierController::class , 'index'])->name('supplier.index');
        Route::get('/create' , [SupplierController::class , 'create'])->name('supplier.create');
        Route::post('/store' , [SupplierController::class , 'store'])->name('supplier.store');
        Route::get('/edit/{id}' , [SupplierController::class , 'edit'])->name('supplier.edit');
        Route::post('/update/{id}' , [SupplierController::class , 'update'])->name('supplier.update');
        Route::get('/delete/{id}' , [SupplierController::class , 'destroy'])->name('supplier.delete');

    });

    Route::group(['prefix' => '/customer'] , function(){
        Route::get('/' , [CustomerController::class , 'index'])->name('customer.index');
        Route::get('/create' , [CustomerController::class , 'create'])->name('customer.create');
        Route::post('/store' , [CustomerController::class , 'store'])->name('customer.store');
        Route::get('/edit/{id}' , [CustomerController::class , 'edit'])->name('customer.edit');
        Route::post('/update/{id}' , [CustomerController::class , 'update'])->name('customer.update');
        Route::get('/delete/{id}' , [CustomerController::class , 'destroy'])->name('customer.delete');
    });

    Route::get('/order/create' , [OrderController::class , 'create'])->name('order.create');
    Route::post('/order/store',[OrderController::class , 'store'])->name('order.store');

    Route::group(['prefix' => '/report'] , function()
    {
        Route::get('/in' , [ReportController::class , 'orders'])->name('report.order');
        Route::get('/out' , [ReportController::class , 'purchases'])->name('report.purchase');
        Route::get('/transaction' , [ReportController::class , 'transactions'])->name('report.transaction');
    });
});
