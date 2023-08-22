<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
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

Route::redirect('/' , '/dashboard');
Route::get('/login',[AuthController::class , 'login'])->name('login');
Route::post('/login' , [AuthController::class , 'authLogin'])->name('auth.login');

Route::group(['middleware' => 'auth'] , function(){
    
    Route::get('/dashboard' ,[DashboardController::class , 'index'])->name('dashboard.index');

    // account
    Route::get('/account',[AccountController::class , 'account'])->name('dashboard.account');
    Route::get('/account/create',[AccountController::class , 'create'])->name('dashboard.account');
    Route::post('/account/save',[AccountController::class , 'store'])->name('dashboard.account');

    Route::get('/customer',[CustomerController::class , 'customer'])->name('dashboard.account');
    Route::get('/customer/create',[CustomerController::class , 'create'])->name('dashboard.account');
    Route::post('/customer/save',[CustomerController::class , 'store'])->name('dashboard.account');
    
});
