<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\InvoiceController;


Route::middleware('password.protect')->group(function () {
    Route::get('/add', function () {
        return view('add');
    })->name('add');
});

Route::get('/pass', function () {
    return view('pass');
})->name('pass');

Route::post('/chk-pass', function (Illuminate\Http\Request $request) {
    $password = $request->input('password');
    session(['password' => $password]);
    return redirect()->route('add');
})->name('chk-pass');


Route::get('/error-page', function () {
    return view('error');
})->name('error-page');



Route::get('/', [IndexController::class, 'index'])->name('/');
Route::get('/home', [IndexController::class, 'index'])->name('home');

View::composer('index', function ($view) {
    $view->with('section', 'about');
    $view->with('section', 'product');
    $view->with('section', 'contact');
});

Auth::routes();


Route::get('/checkout/{itemId}', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/redeem-promo', [PromoController::class, 'redeemPromo'])->name('redeem-promo');
Route::post('/add-promo', [PromoController::class, 'store'])->name('add-promo');
Route::post('/invoice', [InvoiceController::class, 'store'])->name('invoice');
Route::get('/invoice/{invoiceId}', [InvoiceController::class, 'showdetails'])->name('ShowInvoiceDetails');
Route::get('/orders', [InvoiceController::class, 'showdorders'])->name('orders');

