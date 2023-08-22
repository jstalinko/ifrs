<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/account',[DashboardController::class , 'account'])->name('dashboard.account');
    Route::get('/account/create',[DashboardController::class , 'create'])->name('dashboard.account');
    Route::post('/account/save',[DashboardController::class , 'store'])->name('dashboard.account');
    
});
