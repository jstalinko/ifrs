<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

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
    Route::get('/account',[AccountController::class , 'index'])->name('dashboard.account');
    Route::get('/account/create',[AccountController::class , 'create'])->name('dashboard.account');
    Route::post('/account/save',[AccountController::class , 'store'])->name('dashboard.account');

    // customer
    Route::get('/customer',[CustomerController::class , 'index'])->name('dashboard.account');
    Route::get('/customer/create',[CustomerController::class , 'create'])->name('dashboard.account');
    Route::post('/customer/save',[CustomerController::class , 'store'])->name('dashboard.account');

    // journal umum
    Route::get('/journal/general',[JournalController::class , 'index'])->name('dashboard.account');
    Route::get('/journal/general/create',[JournalController::class , 'create'])->name('dashboard.account');
    Route::post('/journal/general/save',[JournalController::class , 'store'])->name('dashboard.account');

    // semua journal
    Route::get('/journal/all',[JournalController::class , 'index'])->name('dashboard.account');
    Route::get('/journal/all/create',[JournalController::class , 'create'])->name('dashboard.account');
    Route::post('/journal/all/save',[JournalController::class , 'store'])->name('dashboard.account');

    // purchase
    Route::get('/transaction/purchase',[PurchaseController::class , 'index'])->name('dashboard.account');
    Route::get('/transaction/purchase/create',[PurchaseController::class , 'create'])->name('dashboard.account');
    Route::post('/transaction/purchase/save',[PurchaseController::class , 'store'])->name('dashboard.account');
    
    // transaction
    Route::get('/transaction/general',[TransactionController::class , 'index'])->name('dashboard.account');
    Route::get('/transaction/general/create',[TransactionController::class , 'create'])->name('dashboard.account');
    Route::post('/transaction/general/save',[TransactionController::class , 'store'])->name('dashboard.account');
    
    // payment
    Route::get('/transaction/payment',[PaymentController::class , 'index'])->name('dashboard.account');
    Route::get('/transaction/payment/create',[PaymentController::class , 'create'])->name('dashboard.account');
    Route::post('/transaction/payment/save',[PaymentController::class , 'store'])->name('dashboard.account');

    // sale
    Route::get('/transaction/sale',[SaleController::class , 'index'])->name('dashboard.account');
    Route::get('/transaction/sale/create',[SaleController::class , 'create'])->name('dashboard.account');
    Route::post('/transaction/sale/save',[SaleController::class , 'store'])->name('dashboard.account');

    // receipt
    Route::get('/transaction/receipt',[ReceiptController::class , 'index'])->name('dashboard.account');
    Route::get('/transaction/receipt/create',[ReceiptController::class , 'create'])->name('dashboard.account');
    Route::post('/transaction/receipt/save',[ReceiptController::class , 'store'])->name('dashboard.account');
});
